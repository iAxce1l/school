// Form1.cs
namespace stkauta
{
    public partial class Form1 : Form
    {
        private List<Vozidlo> vozidla;
        private List<Kontrola> kontroly;

        public Form1()
        {
            InitializeComponent();
            vozidla = new List<Vozidlo>();
            kontroly = new List<Kontrola>();
        }

        private void NovaKontrola_Click(object sender, EventArgs e)
        {
            MessageBox.Show("Formulár novej kontroly", "Nová kontrola");
        }

        private void SpravaVozidiel_Click(object sender, EventArgs e)
        {
            MessageBox.Show("Správa vozidiel", "Vozidlá");
        }

        private void UlozitKontrolu_Click(object sender, EventArgs e)
        {
            MessageBox.Show("Kontrola bola uložená", "Úspech");
        }
    }

    public class Vozidlo
    {
        public string ECV { get; set; }
        public string VIN { get; set; }
        public string TypVozidla { get; set; }
        public string Znacka { get; set; }
        public string Model { get; set; }
        public int RokVyroby { get; set; }
    }

    public class Kontrola
    {
        public int Id { get; set; }
        public string ECV { get; set; }
        public DateTime DatumKontroly { get; set; }
        public string Technik { get; set; }
        public bool Vysledok { get; set; }
        public string Poznamky { get; set; }
    }
}