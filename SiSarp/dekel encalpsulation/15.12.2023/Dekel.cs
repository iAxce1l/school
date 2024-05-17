using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace _15._12._2023
{
    internal class Dekel
    {
        public string Design { get; set; }
        public string Material { get; set; }

        public Dekel(string design, string material) {
            Design = design;
            Material = material;
        }

        public void printCoverInfo()
        {
            Console.WriteLine("Design knihy: " + Design);
            Console.WriteLine("Material knihy: " + Material);
        }
    }
}
