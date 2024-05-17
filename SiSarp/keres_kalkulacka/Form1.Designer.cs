namespace WinFormsApp1
{
    partial class Form1
    {
        /// <summary>
        ///  Required designer variable.
        /// </summary>
        private System.ComponentModel.IContainer components = null;

        /// <summary>
        ///  Clean up any resources being used.
        /// </summary>
        /// <param name="disposing">true if managed resources should be disposed; otherwise, false.</param>
        protected override void Dispose(bool disposing)
        {
            if (disposing && (components != null))
            {
                components.Dispose();
            }
            base.Dispose(disposing);
        }

        #region Windows Form Designer generated code

        /// <summary>
        ///  Required method for Designer support - do not modify
        ///  the contents of this method with the code editor.
        /// </summary>
        private void InitializeComponent()
        {
            display = new TextBox();
            btn1 = new Button();
            btn2 = new Button();
            btn3 = new Button();
            btn4 = new Button();
            btn5 = new Button();
            btn6 = new Button();
            btn7 = new Button();
            btn8 = new Button();
            btn9 = new Button();
            btn0 = new Button();
            btndecimal = new Button();
            btnequals = new Button();
            btnplus = new Button();
            btnminus = new Button();
            btnmultiply = new Button();
            btndivide = new Button();
            btnclear = new Button();
            button1 = new Button();
            button2 = new Button();
            button3 = new Button();
            button4 = new Button();
            SuspendLayout();
            // 
            // display
            // 
            display.Font = new Font("Segoe UI", 12F, FontStyle.Bold, GraphicsUnit.Point, 238);
            display.Location = new Point(21, 12);
            display.Multiline = true;
            display.Name = "display";
            display.Size = new Size(387, 50);
            display.TabIndex = 0;
            display.Text = "0";
            // 
            // btn1
            // 
            btn1.BackColor = SystemColors.ActiveBorder;
            btn1.Cursor = Cursors.Hand;
            btn1.Font = new Font("Segoe UI", 13.8F, FontStyle.Bold, GraphicsUnit.Point, 238);
            btn1.Location = new Point(21, 296);
            btn1.Name = "btn1";
            btn1.Size = new Size(66, 58);
            btn1.TabIndex = 1;
            btn1.Text = "1";
            btn1.UseVisualStyleBackColor = false;
            btn1.Click += btn_N_click;
            // 
            // btn2
            // 
            btn2.BackColor = SystemColors.ActiveBorder;
            btn2.Cursor = Cursors.Hand;
            btn2.Font = new Font("Segoe UI", 13.8F, FontStyle.Bold, GraphicsUnit.Point, 238);
            btn2.Location = new Point(108, 296);
            btn2.Name = "btn2";
            btn2.Size = new Size(66, 58);
            btn2.TabIndex = 2;
            btn2.Text = "2";
            btn2.UseVisualStyleBackColor = false;
            btn2.Click += btn_N_click;
            // 
            // btn3
            // 
            btn3.BackColor = SystemColors.ActiveBorder;
            btn3.Cursor = Cursors.Hand;
            btn3.Font = new Font("Segoe UI", 13.8F, FontStyle.Bold, GraphicsUnit.Point, 238);
            btn3.Location = new Point(194, 296);
            btn3.Name = "btn3";
            btn3.Size = new Size(66, 58);
            btn3.TabIndex = 3;
            btn3.Text = "3";
            btn3.UseVisualStyleBackColor = false;
            btn3.Click += btn_N_click;
            // 
            // btn4
            // 
            btn4.BackColor = SystemColors.ActiveBorder;
            btn4.Cursor = Cursors.Hand;
            btn4.Font = new Font("Segoe UI", 13.8F, FontStyle.Bold, GraphicsUnit.Point, 238);
            btn4.Location = new Point(21, 221);
            btn4.Name = "btn4";
            btn4.Size = new Size(66, 58);
            btn4.TabIndex = 4;
            btn4.Text = "4";
            btn4.UseVisualStyleBackColor = false;
            btn4.Click += btn_N_click;
            // 
            // btn5
            // 
            btn5.BackColor = SystemColors.ActiveBorder;
            btn5.Cursor = Cursors.Hand;
            btn5.Font = new Font("Segoe UI", 13.8F, FontStyle.Bold, GraphicsUnit.Point, 238);
            btn5.Location = new Point(108, 221);
            btn5.Name = "btn5";
            btn5.Size = new Size(66, 58);
            btn5.TabIndex = 5;
            btn5.Text = "5";
            btn5.UseVisualStyleBackColor = false;
            btn5.Click += btn_N_click;
            // 
            // btn6
            // 
            btn6.BackColor = SystemColors.ActiveBorder;
            btn6.Cursor = Cursors.Hand;
            btn6.Font = new Font("Segoe UI", 13.8F, FontStyle.Bold, GraphicsUnit.Point, 238);
            btn6.Location = new Point(194, 221);
            btn6.Name = "btn6";
            btn6.Size = new Size(66, 58);
            btn6.TabIndex = 6;
            btn6.Text = "6";
            btn6.UseVisualStyleBackColor = false;
            btn6.Click += btn_N_click;
            // 
            // btn7
            // 
            btn7.BackColor = SystemColors.ActiveBorder;
            btn7.Cursor = Cursors.Hand;
            btn7.Font = new Font("Segoe UI", 13.8F, FontStyle.Bold, GraphicsUnit.Point, 238);
            btn7.Location = new Point(21, 144);
            btn7.Name = "btn7";
            btn7.Size = new Size(66, 58);
            btn7.TabIndex = 7;
            btn7.Text = "7";
            btn7.UseVisualStyleBackColor = false;
            btn7.Click += btn_N_click;
            // 
            // btn8
            // 
            btn8.BackColor = SystemColors.ActiveBorder;
            btn8.Cursor = Cursors.Hand;
            btn8.Font = new Font("Segoe UI", 13.8F, FontStyle.Bold, GraphicsUnit.Point, 238);
            btn8.Location = new Point(108, 144);
            btn8.Name = "btn8";
            btn8.Size = new Size(66, 58);
            btn8.TabIndex = 8;
            btn8.Text = "8";
            btn8.UseVisualStyleBackColor = false;
            btn8.Click += btn_N_click;
            // 
            // btn9
            // 
            btn9.BackColor = SystemColors.ActiveBorder;
            btn9.Cursor = Cursors.Hand;
            btn9.Font = new Font("Segoe UI", 13.8F, FontStyle.Bold, GraphicsUnit.Point, 238);
            btn9.Location = new Point(194, 144);
            btn9.Name = "btn9";
            btn9.Size = new Size(66, 58);
            btn9.TabIndex = 9;
            btn9.Text = "9";
            btn9.UseVisualStyleBackColor = false;
            btn9.Click += btn_N_click;
            // 
            // btn0
            // 
            btn0.BackColor = SystemColors.ActiveBorder;
            btn0.Cursor = Cursors.Hand;
            btn0.Font = new Font("Segoe UI", 13.8F, FontStyle.Bold, GraphicsUnit.Point, 238);
            btn0.Location = new Point(21, 380);
            btn0.Name = "btn0";
            btn0.Size = new Size(153, 58);
            btn0.TabIndex = 10;
            btn0.Text = "0";
            btn0.UseVisualStyleBackColor = false;
            btn0.Click += btn_N_click;
            // 
            // btndecimal
            // 
            btndecimal.BackColor = SystemColors.ActiveBorder;
            btndecimal.Cursor = Cursors.Hand;
            btndecimal.Font = new Font("Segoe UI", 13.8F, FontStyle.Bold, GraphicsUnit.Point, 238);
            btndecimal.Location = new Point(194, 380);
            btndecimal.Name = "btndecimal";
            btndecimal.Size = new Size(66, 58);
            btndecimal.TabIndex = 11;
            btndecimal.Text = ",";
            btndecimal.UseVisualStyleBackColor = false;
            btndecimal.Click += btndecimal_Click;
            // 
            // btnequals
            // 
            btnequals.BackColor = SystemColors.ActiveCaption;
            btnequals.Cursor = Cursors.Hand;
            btnequals.Font = new Font("Segoe UI", 13.8F, FontStyle.Bold, GraphicsUnit.Point, 238);
            btnequals.Location = new Point(342, 296);
            btnequals.Name = "btnequals";
            btnequals.Size = new Size(66, 142);
            btnequals.TabIndex = 12;
            btnequals.Text = "=";
            btnequals.UseVisualStyleBackColor = false;
            btnequals.Click += btnequals_Click;
            // 
            // btnplus
            // 
            btnplus.BackColor = SystemColors.ActiveBorder;
            btnplus.Cursor = Cursors.Hand;
            btnplus.Font = new Font("Segoe UI", 13.8F, FontStyle.Bold, GraphicsUnit.Point, 238);
            btnplus.Location = new Point(342, 144);
            btnplus.Name = "btnplus";
            btnplus.Size = new Size(66, 135);
            btnplus.TabIndex = 13;
            btnplus.Text = "+";
            btnplus.UseVisualStyleBackColor = false;
            btnplus.Click += btn_op_click;
            // 
            // btnminus
            // 
            btnminus.BackColor = SystemColors.ActiveBorder;
            btnminus.Cursor = Cursors.Hand;
            btnminus.Font = new Font("Segoe UI", 13.8F, FontStyle.Bold, GraphicsUnit.Point, 238);
            btnminus.Location = new Point(342, 68);
            btnminus.Name = "btnminus";
            btnminus.Size = new Size(66, 58);
            btnminus.TabIndex = 14;
            btnminus.Text = "-";
            btnminus.UseVisualStyleBackColor = false;
            btnminus.Click += btn_op_click;
            // 
            // btnmultiply
            // 
            btnmultiply.BackColor = SystemColors.ActiveBorder;
            btnmultiply.Cursor = Cursors.Hand;
            btnmultiply.Font = new Font("Segoe UI", 13.8F, FontStyle.Bold, GraphicsUnit.Point, 238);
            btnmultiply.Location = new Point(194, 68);
            btnmultiply.Name = "btnmultiply";
            btnmultiply.Size = new Size(66, 58);
            btnmultiply.TabIndex = 15;
            btnmultiply.Text = "*";
            btnmultiply.UseVisualStyleBackColor = false;
            btnmultiply.Click += btn_op_click;
            // 
            // btndivide
            // 
            btndivide.BackColor = SystemColors.ActiveBorder;
            btndivide.Cursor = Cursors.Hand;
            btndivide.Font = new Font("Segoe UI", 13.8F, FontStyle.Bold, GraphicsUnit.Point, 238);
            btndivide.Location = new Point(108, 68);
            btndivide.Name = "btndivide";
            btndivide.Size = new Size(66, 58);
            btndivide.TabIndex = 16;
            btndivide.Text = "/";
            btndivide.UseVisualStyleBackColor = false;
            btndivide.Click += btn_op_click;
            // 
            // btnclear
            // 
            btnclear.BackColor = SystemColors.ActiveBorder;
            btnclear.Cursor = Cursors.Hand;
            btnclear.Font = new Font("Segoe UI", 13.8F, FontStyle.Bold, GraphicsUnit.Point, 238);
            btnclear.Location = new Point(21, 68);
            btnclear.Name = "btnclear";
            btnclear.Size = new Size(66, 58);
            btnclear.TabIndex = 17;
            btnclear.Text = "C";
            btnclear.UseVisualStyleBackColor = false;
            btnclear.Click += btnclear_Click;
            // 
            // button1
            // 
            button1.AccessibleDescription = "btn_del";
            button1.BackColor = SystemColors.ActiveBorder;
            button1.Cursor = Cursors.Hand;
            button1.Font = new Font("Segoe UI", 13.8F, FontStyle.Bold, GraphicsUnit.Point, 238);
            button1.Location = new Point(266, 68);
            button1.Name = "button1";
            button1.Size = new Size(66, 58);
            button1.TabIndex = 21;
            button1.Text = "DEL";
            button1.UseVisualStyleBackColor = false;
            button1.Click += btn_del;
            // 
            // button2
            // 
            button2.BackColor = SystemColors.ActiveBorder;
            button2.Cursor = Cursors.Hand;
            button2.Font = new Font("Segoe UI", 13.8F, FontStyle.Bold, GraphicsUnit.Point, 238);
            button2.Location = new Point(266, 144);
            button2.Name = "button2";
            button2.Size = new Size(66, 58);
            button2.TabIndex = 20;
            button2.Text = "x²";
            button2.UseVisualStyleBackColor = false;
            button2.Click += btn_op_click;
            // 
            // button3
            // 
            button3.BackColor = SystemColors.ActiveBorder;
            button3.Cursor = Cursors.Hand;
            button3.Font = new Font("Segoe UI", 13.8F, FontStyle.Bold, GraphicsUnit.Point, 238);
            button3.Location = new Point(266, 221);
            button3.Name = "button3";
            button3.Size = new Size(66, 58);
            button3.TabIndex = 19;
            button3.Text = "√x";
            button3.UseVisualStyleBackColor = false;
            button3.Click += btn_op_click;
            // 
            // button4
            // 
            button4.BackColor = SystemColors.ActiveBorder;
            button4.Cursor = Cursors.Hand;
            button4.Font = new Font("Segoe UI", 13.8F, FontStyle.Bold, GraphicsUnit.Point, 238);
            button4.Location = new Point(266, 296);
            button4.Name = "button4";
            button4.Size = new Size(66, 58);
            button4.TabIndex = 18;
            button4.Text = "SP";
            button4.UseVisualStyleBackColor = false;
            button4.Click += btn_special;
            // 
            // Form1
            // 
            AutoScaleDimensions = new SizeF(8F, 20F);
            AutoScaleMode = AutoScaleMode.Font;
            ClientSize = new Size(433, 450);
            Controls.Add(button1);
            Controls.Add(button2);
            Controls.Add(button3);
            Controls.Add(button4);
            Controls.Add(btnclear);
            Controls.Add(btndivide);
            Controls.Add(btnmultiply);
            Controls.Add(btnminus);
            Controls.Add(btnplus);
            Controls.Add(btnequals);
            Controls.Add(btndecimal);
            Controls.Add(btn0);
            Controls.Add(btn9);
            Controls.Add(btn8);
            Controls.Add(btn7);
            Controls.Add(btn6);
            Controls.Add(btn5);
            Controls.Add(btn4);
            Controls.Add(btn3);
            Controls.Add(btn2);
            Controls.Add(btn1);
            Controls.Add(display);
            Name = "Form1";
            Text = "Form1";
            ResumeLayout(false);
            PerformLayout();
        }

        #endregion

        private TextBox display;
        private Button btn1;
        private Button btn2;
        private Button btn3;
        private Button btn4;
        private Button btn5;
        private Button btn6;
        private Button btn7;
        private Button btn8;
        private Button btn9;
        private Button btn0;
        private Button btndecimal;
        private Button btnequals;
        private Button btnplus;
        private Button btnminus;
        private Button btnmultiply;
        private Button btndivide;
        private Button btnclear;
        private Button button1;
        private Button button2;
        private Button button3;
        private Button button4;
    }
}
