using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace _15._12._2023
{
    internal class Autor
    {
        public string Meno {  get; set; }
        public string Priezvisko { get; set;}

        public Autor(string meno, string priezvisko)
        {
            Meno = meno;
            Priezvisko = priezvisko;
        }

        public void PrintInfo()
        {
            Console.WriteLine("Meno autora je: " +  Meno + " " + Priezvisko);
        }
    }
}
