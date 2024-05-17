class Program
{
    static void Main()
    {
        int[] vysledky = new int[128];
        int count = 1;
        int i = 0;
        int num1 = 0;
        int num2 = 0;


        while (true)
        {
            Console.WriteLine("Vlož operáciu");
            int operators = 0;

            do
            {
                try
                {
                    if (count <= 2)
                    {
                        Console.WriteLine("1. + ,2. - ,3.  *,4. /");
                        operators = Convert.ToInt32(Console.ReadLine());
                        if (operators == 5)
                        {
                            Console.WriteLine("Tuto fičurku ešte nepoznaš");
                            operators = 0;
                        }
                    }
                    else
                    {
                        Console.WriteLine("1. + ,2. - ,3.  *,4. /,5. AritmetickyPriemer");
                        operators = Convert.ToInt32(Console.ReadLine());
                    }
                }
                catch (FormatException e)
                {
                    operators = 0;
                }
            }
            while (operators <= 0 || operators > 5);
            if (operators != 5)
            {
                Console.WriteLine("1. číslo:");
                while (!int.TryParse(Console.ReadLine(), out num1))
                {
                    Console.WriteLine("Zadaj platné číslo:");
                }

                Console.WriteLine("2. číslo:");
                while (!int.TryParse(Console.ReadLine(), out num2))
                {
                    Console.WriteLine("Zadaj platné číslo:");
                }
            }

            double vysledok = 0;

            if (num2 == 0 && operators == 4)
            {
                Console.WriteLine("Neplatné číslo, zvolená operácia je delenie.");
                continue;
            }
            switch (operators)
            {
                case 1:
                    vysledok = num1 + num2;
                    Console.WriteLine("Sčítanie:" + vysledok);
                    vysledky[i] = (int)vysledok;
                    break;
                case 2:
                    vysledok = num1 - num2;
                    Console.WriteLine("Odčítanie:" + vysledok);
                    vysledky[i] = (int)vysledok;
                    break;
                case 3:
                    vysledok = num1 * num2;
                    Console.WriteLine("Násobenie:" + vysledok);
                    vysledky[i] = (int)vysledok;
                    break;
                case 4:
                    vysledok = (double)num1 / num2;
                    Console.WriteLine("Delenie:" + vysledok);
                    vysledky[i] = (int)vysledok;
                    break;
                case 5:
                    int sum = 0;
                    foreach (int result in vysledky)
                    {
                        sum += result;
                    }

                    double average = (double)sum / (count - 1);
                    Console.WriteLine("Priemer čísel: " + average);
                    count--;
                    break;
                default:
                    Console.WriteLine("Zlý vstup");
                    break;

            }
            count++;
            i++;
        }
    }
}