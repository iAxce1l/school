namespace WinFormsApp1
{
    public partial class Form1 : Form
    {

        string calTotal;
        int num1 = 0;
        int num2 = 0;
        string op;
        int result = 0;


        public Form1()
        {
            InitializeComponent();
        }
        private void btndecimal_Click(object sender, EventArgs e)
        {
            display.AppendText(btndecimal.Text);
        }
        private void btnclear_Click(object sender, EventArgs e)
        {
            display.Clear();
            display.Text = "0";
            num1 = 0;
            num2 = 0;
            result = 0;
            op = " ";
        }

        private void btnequals_Click(object sender, EventArgs e)
        {
            num2 = int.Parse(display.Text);
            switch (op)
            {
                case "+":
                    result = num1 + num2;
                    break;
                case "-":
                    result = num1 - num2;
                    break;
                case "*":
                    result = num1 * num2;
                    break;
                case "/":
                    if (num2.ToString() == "0")
                    {
                        display.Clear();
                        display.Text = "Math Error";
                        return;
                    }
                    else 
                    {
                        result = num1 / num2;
                    }
                    break;
            }
            display.Clear();
            display.Text = result.ToString();
        }

        private void btn_N_click(object sender, EventArgs e)
        {
            if (display.Text == "0") {
                display.Clear();
            }
            Button num = (Button)sender;
            display.AppendText(num.Text);
        }

        private void btn_op_click(object sender, EventArgs e)
        {
            Button b = (Button)sender;
            num1 = int.Parse(display.Text);
            op = b.Text;
            display.Clear();
            if (op == "x²")
            {
                display.Clear();
                display.Text = Math.Pow(Math.Abs(num1), 2).ToString();
            }
            else if (op == "√x")
            {
                display.Clear();
                display.Text = Math.Sqrt(Math.Abs(num1)).ToString();
            }
        }

        private void btn_del(object sender, EventArgs e)
        {
            if (display.Text.Length > 0)
            {
                display.Text = display.Text.Remove(display.Text.Length - 1);
                if (display.Text.Length == 0)
                {
                    display.Text = "0";
                }
            }

        }
        private void btn_special(object sender, EventArgs e)
        {

        }
    }
}
