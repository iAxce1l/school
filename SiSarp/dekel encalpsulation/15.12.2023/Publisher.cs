using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace _15._12._2023
{
    internal class Publisher
    {
        public string Name { get; set; }
        public string Location { get; set; }

        public Publisher(string name, string location) {
            Name = name;
            Location = location;
        }
        public void printPublisherInfo()
        {
            Console.WriteLine("Nazov publishera: " + Name);
            Console.WriteLine("Lokacia: " + Location);
        }
    }
}
