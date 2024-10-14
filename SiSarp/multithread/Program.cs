using System.Threading;

namespace Threading
{
    internal class Program
    {
        static void Main(string[] args)
        {
            Thread mainThread = Thread.CurrentThread;
            mainThread.Name = "Hlavne vlakno";
            Console.WriteLine(mainThread.Name);
            Thread newThread1 = new Thread(Sprava1);
            Thread newThread2 = new Thread(Sprava2);
            Thread newThread3 = new Thread(Sprava3);

            newThread1.Start();
            newThread2.Start();
            newThread3.Start();

            Console.ReadLine();
        }

        public static void Sprava1()
        {
            for (int i = 0; i < 10; i++)
            {
                Console.WriteLine("Trvanie 1. spravy je: " + i + " sekund");
                Thread.Sleep(1000);
            }
            Console.WriteLine("Sprava 1 skoncila");
        }

        public static void Sprava2()
        {
            for (int i = 0; i < 10; i++)
            {
                Console.WriteLine("Trvanie 2. spravy je: : " + i + " sekund");
                Thread.Sleep(1000);
            }
            Console.WriteLine("Sprava 2 skoncila");
        }

        public static void Sprava3()
        {
            for (int i = 0; i < 10; i++)
            {
                Console.WriteLine("Trvanie 3. spravy je: : " + i + " sekund");
                Thread.Sleep(1000);
            }
            Console.WriteLine("Sprava 3 skoncila");
        }
    }
}
