namespace du_pitko_hra
{
    public partial class Form1 : Form
    {
        private int max = 0;
        private int min = 0;
        private int random;
        private int clicky = 0;

        public Form1()
        {
            InitializeComponent();
        }

        private void radioButton1_CheckedChanged(object sender, EventArgs e)
        {
            if (radioButton1.Checked)
            {
                min = 1;
                max = 5;
            }
        }

        private void radioButton2_CheckedChanged(object sender, EventArgs e)
        {
            if (radioButton2.Checked)
            {
                min = 5;
                max = 10;
            }

        }

        private void button2_Click(object sender, EventArgs e)
        {
            Random rand1 = new Random();
            random = rand1.Next(min, max + 1);
            clicky = 0;
            label2.Text = "Pocet pokusov: 0";
        }

        private void button1_Click(object sender, EventArgs e)
        {
            int vstup;

            if (int.TryParse(textBox1.Text, out vstup))
            {
                clicky++; 
                label2.Text = "Pocet pokusov: " + clicky; 
                if (vstup == random)
                {
                    label1.Text = "Trafil si";
                }
                else if (vstup < random)
                {
                    label1.Text = "Vyššie";
                }
                else if (vstup > random)
                {
                    label1.Text = "Nižšie";
                }
            }
            else
            {
                label1.Text = "Nedal si èislo";
            }
        }

        private void textBox1_TextChanged(object sender, EventArgs e)
        {

        }

        private void label1_Click(object sender, EventArgs e)
        {

        }

        private void label2_Click(object sender, EventArgs e)
        {

        }
    }
}