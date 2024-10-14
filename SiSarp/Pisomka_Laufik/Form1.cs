using System.Drawing.Text;

namespace Pisomka_Laufik
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            private int cena = 0;
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

        }

        private void radioButton3_CheckedChanged(object sender, EventArgs e)
        {

        }
    }
}



