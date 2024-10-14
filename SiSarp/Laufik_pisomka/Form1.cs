namespace Laufik_pisomka
{
    public partial class Form1 : Form
    {
        private double cena = 0;
        private double vyslednacena = 0;
        public Form1()
        {
            InitializeComponent();
        }

        private void radioButton1_CheckedChanged(object sender, EventArgs e)
        {
            if (radioButton1.Checked)
            {
                cena = 5;
            }
        }

        private void radioButton2_CheckedChanged(object sender, EventArgs e)
        {
            if (radioButton2.Checked)
            {
                cena = 7;
            }
        }

        private void radioButton3_CheckedChanged(object sender, EventArgs e)
        {
            if (radioButton3.Checked)
            {
                cena = 10;
            }
        }

        private void checkBox1_CheckedChanged(object sender, EventArgs e)
        {
            if (checkBox1.Checked)
            {
                cena = cena + 1;
            }
        }

        private void checkBox2_CheckedChanged(object sender, EventArgs e)
        {
            if (checkBox2.Checked)
            {
                cena = cena + 1;
            }
        }

        private void checkBox3_CheckedChanged(object sender, EventArgs e)
        {
            if (checkBox3.Checked)
            {
                cena = cena + 1;
            }
        }

        private void button1_Click(object sender, EventArgs e)
        {
            vyslednacena = cena * 1.2;
            label2.Text = "Cena je: " + vyslednacena.ToString() + "€";
            label4.Text = "Objednávka na meno: " + textBox1.Text;
            MessageBox.Show("Cena je: " + vyslednacena.ToString() + "€" + "  " + "Objednávka na meno: " + textBox1.Text);
        }

        private void label2_Click(object sender, EventArgs e)
        {

        }

        private void textBox1_TextChanged(object sender, EventArgs e)
        {

        }

        private void comboBox1_SelectedIndexChanged(object sender, EventArgs e)
        {
            if (comboBox1.SelectedText.Contains("ÏURIHO ŠTANGLE"))
            {
                cena = cena + 1;
            }
        }

        private void label3_Click(object sender, EventArgs e)
        {

        }

        
    }
}
