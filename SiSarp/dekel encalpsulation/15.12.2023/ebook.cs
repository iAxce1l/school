using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace _15._12._2023
{
    public class ebook : Book
    {
        private string EbookFormat;
        public ebook(string nazov, string autor, DateOnly datum, Dekel dekelos) : base(nazov, autor, datum, dekelos) 
        {
        EbookFormat = ebookformat;
        }
        public void PrintEbookInfo()
        {
            Console.WriteLine("Format knihy: " + Ebookformt);
        }
    }
}
