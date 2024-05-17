using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace _15._12._2023
{
    internal class Author
    {
        public string Name {  get; set; }
        public string Surname { get; set;}

        public Author(string name, string surname)
        {
            Name = name;
            Surname = surname;
        }

        public void PrintInfo()
        {
            Console.WriteLine("Meno autora je: " +  Name + " " + Surname);
        }
    }
}
