// Form1.Designer.cs
namespace stkauta
{
    partial class Form1
    {
        private System.ComponentModel.IContainer components = null;

        protected override void Dispose(bool disposing)
        {
            if (disposing && (components != null))
            {
                components.Dispose();
            }
            base.Dispose(disposing);
        }

        private System.Windows.Forms.MenuStrip hlavneMenu;
        private System.Windows.Forms.ToolStripMenuItem suborMenuItem;
        private System.Windows.Forms.ToolStripMenuItem novaKontrolaMenuItem;
        private System.Windows.Forms.ToolStripMenuItem spravaVozidielMenuItem;
        private System.Windows.Forms.ToolStripSeparator menuSeparator;
        private System.Windows.Forms.ToolStripMenuItem koniecMenuItem;

        private System.Windows.Forms.TableLayoutPanel hlavnyPanel;
        private System.Windows.Forms.Panel kontrolaPanel;
        private System.Windows.Forms.Panel statistikaPanel;

        private System.Windows.Forms.GroupBox kontrolaGroupBox;
        private System.Windows.Forms.TableLayoutPanel kontrolaLayout;

        private System.Windows.Forms.Label ecvLabel;
        private System.Windows.Forms.TextBox ecvTextBox;
        private System.Windows.Forms.Label vinLabel;
        private System.Windows.Forms.TextBox vinTextBox;
        private System.Windows.Forms.Label typVozidlaLabel;
        private System.Windows.Forms.ComboBox typVozidlaComboBox;
        private System.Windows.Forms.Label datumKontrolyLabel;
        private System.Windows.Forms.DateTimePicker datumKontrolyPicker;
        private System.Windows.Forms.Label technikLabel;
        private System.Windows.Forms.TextBox technikTextBox;
        private System.Windows.Forms.Button ulozitButton;

        private System.Windows.Forms.GroupBox statistikaGroupBox;
        private System.Windows.Forms.ListView statistikaListView;
        private System.Windows.Forms.ColumnHeader parameterColumn;
        private System.Windows.Forms.ColumnHeader hodnotaColumn;

        private void InitializeComponent()
        {
            this.components = new System.ComponentModel.Container();
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.ClientSize = new System.Drawing.Size(1200, 800);
            this.MinimumSize = new System.Drawing.Size(800, 600);

            // Hlavné menu
            this.hlavneMenu = new System.Windows.Forms.MenuStrip();
            this.suborMenuItem = new System.Windows.Forms.ToolStripMenuItem();
            this.novaKontrolaMenuItem = new System.Windows.Forms.ToolStripMenuItem();
            this.spravaVozidielMenuItem = new System.Windows.Forms.ToolStripMenuItem();
            this.menuSeparator = new System.Windows.Forms.ToolStripSeparator();
            this.koniecMenuItem = new System.Windows.Forms.ToolStripMenuItem();

            this.hlavneMenu.Items.AddRange(new System.Windows.Forms.ToolStripItem[] {
                this.suborMenuItem
            });
            this.suborMenuItem.DropDownItems.AddRange(new System.Windows.Forms.ToolStripItem[] {
                this.novaKontrolaMenuItem,
                this.spravaVozidielMenuItem,
                this.menuSeparator,
                this.koniecMenuItem
            });

            // Hlavný panel
            this.hlavnyPanel = new System.Windows.Forms.TableLayoutPanel();
            this.kontrolaPanel = new System.Windows.Forms.Panel();
            this.statistikaPanel = new System.Windows.Forms.Panel();

            this.hlavnyPanel.SuspendLayout();
            this.kontrolaPanel.SuspendLayout();
            this.statistikaPanel.SuspendLayout();

            this.hlavnyPanel.ColumnCount = 2;
            this.hlavnyPanel.ColumnStyles.Add(new System.Windows.Forms.ColumnStyle(System.Windows.Forms.SizeType.Percent, 70F));
            this.hlavnyPanel.ColumnStyles.Add(new System.Windows.Forms.ColumnStyle(System.Windows.Forms.SizeType.Percent, 30F));
            this.hlavnyPanel.Dock = System.Windows.Forms.DockStyle.Fill;
            this.hlavnyPanel.Padding = new System.Windows.Forms.Padding(10);

            // Kontrola panel
            this.kontrolaGroupBox = new System.Windows.Forms.GroupBox();
            this.kontrolaLayout = new System.Windows.Forms.TableLayoutPanel();

            this.kontrolaPanel.Dock = System.Windows.Forms.DockStyle.Fill;
            this.kontrolaPanel.Padding = new System.Windows.Forms.Padding(10);

            this.kontrolaGroupBox.Dock = System.Windows.Forms.DockStyle.Fill;
            this.kontrolaGroupBox.Padding = new System.Windows.Forms.Padding(10);

            this.kontrolaLayout.ColumnCount = 2;
            this.kontrolaLayout.RowCount = 6;
            this.kontrolaLayout.Dock = System.Windows.Forms.DockStyle.Fill;
            this.kontrolaLayout.ColumnStyles.Add(new System.Windows.Forms.ColumnStyle(System.Windows.Forms.SizeType.Percent, 30F));
            this.kontrolaLayout.ColumnStyles.Add(new System.Windows.Forms.ColumnStyle(System.Windows.Forms.SizeType.Percent, 70F));

            for (int i = 0; i < 6; i++)
            {
                this.kontrolaLayout.RowStyles.Add(new System.Windows.Forms.RowStyle(System.Windows.Forms.SizeType.Absolute, 40F));
            }

            // Inicializácia komponentov kontroly
            this.ecvLabel = new System.Windows.Forms.Label();
            this.ecvTextBox = new System.Windows.Forms.TextBox();
            this.vinLabel = new System.Windows.Forms.Label();
            this.vinTextBox = new System.Windows.Forms.TextBox();
            this.typVozidlaLabel = new System.Windows.Forms.Label();
            this.typVozidlaComboBox = new System.Windows.Forms.ComboBox();
            this.datumKontrolyLabel = new System.Windows.Forms.Label();
            this.datumKontrolyPicker = new System.Windows.Forms.DateTimePicker();
            this.technikLabel = new System.Windows.Forms.Label();
            this.technikTextBox = new System.Windows.Forms.TextBox();
            this.ulozitButton = new System.Windows.Forms.Button();

            // Nastavenie vlastností komponentov
            this.ecvLabel.Dock = System.Windows.Forms.DockStyle.Fill;
            this.ecvLabel.TextAlign = System.Drawing.ContentAlignment.MiddleLeft;
            this.ecvTextBox.Dock = System.Windows.Forms.DockStyle.Fill;
            this.ecvTextBox.Anchor = ((System.Windows.Forms.AnchorStyles)((System.Windows.Forms.AnchorStyles.Left | System.Windows.Forms.AnchorStyles.Right)));

            this.vinLabel.Dock = System.Windows.Forms.DockStyle.Fill;
            this.vinLabel.TextAlign = System.Drawing.ContentAlignment.MiddleLeft;
            this.vinTextBox.Dock = System.Windows.Forms.DockStyle.Fill;
            this.vinTextBox.Anchor = ((System.Windows.Forms.AnchorStyles)((System.Windows.Forms.AnchorStyles.Left | System.Windows.Forms.AnchorStyles.Right)));

            this.typVozidlaLabel.Dock = System.Windows.Forms.DockStyle.Fill;
            this.typVozidlaLabel.TextAlign = System.Drawing.ContentAlignment.MiddleLeft;
            this.typVozidlaComboBox.Dock = System.Windows.Forms.DockStyle.Fill;
            this.typVozidlaComboBox.DropDownStyle = System.Windows.Forms.ComboBoxStyle.DropDownList;

            this.datumKontrolyLabel.Dock = System.Windows.Forms.DockStyle.Fill;
            this.datumKontrolyLabel.TextAlign = System.Drawing.ContentAlignment.MiddleLeft;
            this.datumKontrolyPicker.Dock = System.Windows.Forms.DockStyle.Fill;

            this.technikLabel.Dock = System.Windows.Forms.DockStyle.Fill;
            this.technikLabel.TextAlign = System.Drawing.ContentAlignment.MiddleLeft;
            this.technikTextBox.Dock = System.Windows.Forms.DockStyle.Fill;

            this.ulozitButton.Dock = System.Windows.Forms.DockStyle.Fill;
            this.ulozitButton.BackColor = System.Drawing.Color.LightGreen;
            this.ulozitButton.FlatStyle = System.Windows.Forms.FlatStyle.Flat;

            // Pridanie komponentov do layoutu
            this.kontrolaLayout.Controls.Add(this.ecvLabel, 0, 0);
            this.kontrolaLayout.Controls.Add(this.ecvTextBox, 1, 0);
            this.kontrolaLayout.Controls.Add(this.vinLabel, 0, 1);
            this.kontrolaLayout.Controls.Add(this.vinTextBox, 1, 1);
            this.kontrolaLayout.Controls.Add(this.typVozidlaLabel, 0, 2);
            this.kontrolaLayout.Controls.Add(this.typVozidlaComboBox, 1, 2);
            this.kontrolaLayout.Controls.Add(this.datumKontrolyLabel, 0, 3);
            this.kontrolaLayout.Controls.Add(this.datumKontrolyPicker, 1, 3);
            this.kontrolaLayout.Controls.Add(this.technikLabel, 0, 4);
            this.kontrolaLayout.Controls.Add(this.technikTextBox, 1, 4);
            this.kontrolaLayout.Controls.Add(this.ulozitButton, 1, 5);

            // Štatistika panel
            this.statistikaGroupBox = new System.Windows.Forms.GroupBox();
            this.statistikaListView = new System.Windows.Forms.ListView();
            this.parameterColumn = new System.Windows.Forms.ColumnHeader();
            this.hodnotaColumn = new System.Windows.Forms.ColumnHeader();

            this.statistikaPanel.Dock = System.Windows.Forms.DockStyle.Fill;
            this.statistikaPanel.Padding = new System.Windows.Forms.Padding(10);

            this.statistikaGroupBox.Dock = System.Windows.Forms.DockStyle.Fill;
            this.statistikaGroupBox.Padding = new System.Windows.Forms.Padding(10);

            this.statistikaListView.Dock = System.Windows.Forms.DockStyle.Fill;
            this.statistikaListView.View = System.Windows.Forms.View.Details;
            this.statistikaListView.FullRowSelect = true;
            this.statistikaListView.GridLines = true;

            this.statistikaListView.Columns.AddRange(new System.Windows.Forms.ColumnHeader[] {
                this.parameterColumn,
                this.hodnotaColumn
            });

            this.parameterColumn.Width = 150;
            this.hodnotaColumn.Width = 100;

            // Nastavenie textov
            this.Text = "STK Automatizovaný Systém";
            this.suborMenuItem.Text = "Súbor";
            this.novaKontrolaMenuItem.Text = "Nová kontrola";
            this.spravaVozidielMenuItem.Text = "Správa vozidiel";
            this.koniecMenuItem.Text = "Ukončiť";

            this.kontrolaGroupBox.Text = "Nová kontrola";
            this.ecvLabel.Text = "EČV:";
            this.vinLabel.Text = "VIN:";
            this.typVozidlaLabel.Text = "Typ vozidla:";
            this.datumKontrolyLabel.Text = "Dátum kontroly:";
            this.technikLabel.Text = "Technik:";
            this.ulozitButton.Text = "Uložiť kontrolu";

            this.statistikaGroupBox.Text = "Štatistiky";
            this.parameterColumn.Text = "Parameter";
            this.hodnotaColumn.Text = "Hodnota";

            // Naplnenie ComboBoxu
            this.typVozidlaComboBox.Items.AddRange(new object[] {
                "Osobné",
                "Nákladné",
                "Autobus",
                "Motocykel"
            });

            // Nastavenie eventov
            this.novaKontrolaMenuItem.Click += new System.EventHandler(this.NovaKontrola_Click);
            this.spravaVozidielMenuItem.Click += new System.EventHandler(this.SpravaVozidiel_Click);
            this.koniecMenuItem.Click += new System.EventHandler((sender, e) => Application.Exit());
            this.ulozitButton.Click += new System.EventHandler(this.UlozitKontrolu_Click);

            // Zostavenie hierarchie komponentov
            this.kontrolaGroupBox.Controls.Add(this.kontrolaLayout);
            this.kontrolaPanel.Controls.Add(this.kontrolaGroupBox);

            this.statistikaGroupBox.Controls.Add(this.statistikaListView);
            this.statistikaPanel.Controls.Add(this.statistikaGroupBox);

            this.hlavnyPanel.Controls.Add(this.kontrolaPanel, 0, 0);
            this.hlavnyPanel.Controls.Add(this.statistikaPanel, 1, 0);

            // Pridanie hlavných komponentov do formulára
            this.Controls.Add(this.hlavneMenu);
            this.Controls.Add(this.hlavnyPanel);

            this.MainMenuStrip = this.hlavneMenu;

            this.hlavnyPanel.ResumeLayout(false);
            this.kontrolaPanel.ResumeLayout(false);
            this.statistikaPanel.ResumeLayout(false);
        }
    }
}