using System;
using System.Windows.Forms;
using System.Linq;
using evidenciaoprav.Models;
using evidenciaoprav.Services;

namespace evidenciaoprav
{
    public partial class MainForm : Form
    {
        private Button btnAdd;
        private Button btnEdit;
        private Button btnDelete;
        private Button btnSearch;
        private TextBox txtSearch;
        private DataGridView dgvCars;
        private readonly IDataService _dataService;

        public MainForm()
        {
            InitializeComponent();
            _dataService = new DataService();
            SetupDataGridView();
            LoadCars();
        }

        private void SetupDataGridView()
        {
            dgvCars.Columns.AddRange(new DataGridViewColumn[]
            {
                new DataGridViewTextBoxColumn { Name = "Id", HeaderText = "ID", Visible = false },
                new DataGridViewTextBoxColumn { Name = "Brand", HeaderText = "Brand" },
                new DataGridViewTextBoxColumn { Name = "Model", HeaderText = "Model" },
                new DataGridViewTextBoxColumn { Name = "LicensePlate", HeaderText = "License Plate" },
                new DataGridViewTextBoxColumn { Name = "Year", HeaderText = "Year" },
                new DataGridViewTextBoxColumn { Name = "Color", HeaderText = "Color" },
                new DataGridViewTextBoxColumn { Name = "VIN", HeaderText = "VIN" },
                new DataGridViewTextBoxColumn { Name = "OwnerName", HeaderText = "Owner Name" },
                new DataGridViewTextBoxColumn { Name = "OwnerContact", HeaderText = "Owner Contact" }
            });
        }

        private void LoadCars()
        {
            dgvCars.Rows.Clear();
            var cars = _dataService.GetAllCars();
            foreach (var car in cars)
            {
                dgvCars.Rows.Add(
                    car.Id,
                    car.Brand,
                    car.Model,
                    car.LicensePlate,
                    car.Year,
                    car.Color,
                    car.VIN,
                    car.OwnerName,
                    car.OwnerContact
                );
            }
        }

        private void btnAdd_Click(object sender, EventArgs e)
        {
            using (var addForm = new CarForm())
            {
                if (addForm.ShowDialog() == DialogResult.OK)
                {
                    try
                    {
                        _dataService.AddCar(addForm.Car);
                        LoadCars();
                        MessageBox.Show("Car added successfully!", "Success", MessageBoxButtons.OK, MessageBoxIcon.Information);
                    }
                    catch (Exception ex)
                    {
                        MessageBox.Show($"Error adding car: {ex.Message}", "Error", MessageBoxButtons.OK, MessageBoxIcon.Error);
                    }
                }
            }
        }

        private void btnEdit_Click(object sender, EventArgs e)
        {
            if (dgvCars.SelectedRows.Count == 0)
            {
                MessageBox.Show("Please select a car to edit.", "Warning", MessageBoxButtons.OK, MessageBoxIcon.Warning);
                return;
            }

            int id = (int)dgvCars.SelectedRows[0].Cells["Id"].Value;
            var car = _dataService.GetCarById(id);

            using (var editForm = new CarForm(car))
            {
                if (editForm.ShowDialog() == DialogResult.OK)
                {
                    try
                    {
                        _dataService.UpdateCar(editForm.Car);
                        LoadCars();
                        MessageBox.Show("Car updated successfully!", "Success", MessageBoxButtons.OK, MessageBoxIcon.Information);
                    }
                    catch (Exception ex)
                    {
                        MessageBox.Show($"Error updating car: {ex.Message}", "Error", MessageBoxButtons.OK, MessageBoxIcon.Error);
                    }
                }
            }
        }

        private void btnDelete_Click(object sender, EventArgs e)
        {
            if (dgvCars.SelectedRows.Count == 0)
            {
                MessageBox.Show("Please select a car to delete.", "Warning", MessageBoxButtons.OK, MessageBoxIcon.Warning);
                return;
            }

            int id = (int)dgvCars.SelectedRows[0].Cells["Id"].Value;
            string licensePlate = dgvCars.SelectedRows[0].Cells["LicensePlate"].Value.ToString();

            if (MessageBox.Show($"Are you sure you want to delete the car with license plate {licensePlate}?",
                "Confirm Delete", MessageBoxButtons.YesNo, MessageBoxIcon.Question) == DialogResult.Yes)
            {
                try
                {
                    _dataService.DeleteCar(id);
                    LoadCars();
                    MessageBox.Show("Car deleted successfully!", "Success", MessageBoxButtons.OK, MessageBoxIcon.Information);
                }
                catch (Exception ex)
                {
                    MessageBox.Show($"Error deleting car: {ex.Message}", "Error", MessageBoxButtons.OK, MessageBoxIcon.Error);
                }
            }
        }

        private void btnSearch_Click(object sender, EventArgs e)
        {
            string searchTerm = txtSearch.Text.Trim().ToLower();
            if (string.IsNullOrEmpty(searchTerm))
            {
                LoadCars();
                return;
            }

            var allCars = _dataService.GetAllCars();
            var filteredCars = allCars.Where(car =>
                car.Brand.ToLower().Contains(searchTerm) ||
                car.Model.ToLower().Contains(searchTerm) ||
                car.LicensePlate.ToLower().Contains(searchTerm) ||
                car.VIN.ToLower().Contains(searchTerm) ||
                car.OwnerName.ToLower().Contains(searchTerm)
            ).ToList();

            dgvCars.Rows.Clear();
            foreach (var car in filteredCars)
            {
                dgvCars.Rows.Add(
                    car.Id,
                    car.Brand,
                    car.Model,
                    car.LicensePlate,
                    car.Year,
                    car.Color,
                    car.VIN,
                    car.OwnerName,
                    car.OwnerContact
                );
            }
        }
    }
}

// CarForm.cs - Form for adding/editing cars
public class CarForm : Form
{
    private TextBox txtBrand;
    private TextBox txtModel;
    private TextBox txtLicensePlate;
    private NumericUpDown nudYear;
    private TextBox txtColor;
    private TextBox txtVIN;
    private TextBox txtOwnerName;
    private TextBox txtOwnerContact;
    private Button btnSave;
    private Button btnCancel;

    public Car Car { get; private set; }

    public CarForm(Car car = null)
    {
        InitializeComponent();
        if (car != null)
        {
            Car = car;
            LoadCarData();
        }
        else
        {
            Car = new Car();
        }
    }

    private void InitializeComponent()
    {
        // Initialize and layout all controls
        // (Form layout code would go here)
    }

    private void LoadCarData()
    {
        txtBrand.Text = Car.Brand;
        txtModel.Text = Car.Model;
        txtLicensePlate.Text = Car.LicensePlate;
        nudYear.Value = Car.Year;
        txtColor.Text = Car.Color;
        txtVIN.Text = Car.VIN;
        txtOwnerName.Text = Car.OwnerName;
        txtOwnerContact.Text = Car.OwnerContact;
    }

    private void btnSave_Click(object sender, EventArgs e)
    {
        if (ValidateInput())
        {
            Car.Brand = txtBrand.Text;
            Car.Model = txtModel.Text;
            Car.LicensePlate = txtLicensePlate.Text;
            Car.Year = (int)nudYear.Value;
            Car.Color = txtColor.Text;
            Car.VIN = txtVIN.Text;
            Car.OwnerName = txtOwnerName.Text;
            Car.OwnerContact = txtOwnerContact.Text;

            DialogResult = DialogResult.OK;
            Close();
        }
    }

    private bool ValidateInput()
    {
        if (string.IsNullOrWhiteSpace(txtBrand.Text) ||
            string.IsNullOrWhiteSpace(txtModel.Text) ||
            string.IsNullOrWhiteSpace(txtLicensePlate.Text) ||
            string.IsNullOrWhiteSpace(txtVIN.Text) ||
            string.IsNullOrWhiteSpace(txtOwnerName.Text))
        {
            MessageBox.Show("Please fill in all required fields.", "Validation Error",
                MessageBoxButtons.OK, MessageBoxIcon.Warning);
            return false;
        }

        if (!Utils.ValidationHelper.IsValidLicensePlate(txtLicensePlate.Text))
        {
            MessageBox.Show("Invalid license plate format.", "Validation Error",
                MessageBoxButtons.OK, MessageBoxIcon.Warning);
            return false;
        }

        if (!Utils.ValidationHelper.IsValidVIN(txtVIN.Text))
        {
            MessageBox.Show("Invalid VIN format.", "Validation Error",
                MessageBoxButtons.OK, MessageBoxIcon.Warning);
            return false;
        }

        return true;
    }
}