using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Book
{
    public class Dekel
    {
        public string Design;
        public string Material;
    }

    public Dekel(string Design, string Material)
    {
        Design = design;
        Material = material;
    }
    public void printDekelInfo()
    {
        Console.WriteLine("Design knihy: " + Design);
        Console.WriteLine("Material knihy: " + Material);
    }


}
