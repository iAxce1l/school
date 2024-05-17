using Book;
using System;

namespace _15._12._2023
{
    internal class Book
    {
        public string Name { get; set; }
        public string Author { get; set; }
        public DateOnly Date { get; set; }
        public Dekel BookDekel;
        

        public Book(string name, string author, DateOnly date, Dekel dekel)
        {
            Name = name;
            Author = author;
            Date = date;
            BookDekel = dekel;
        }
        public void PrintInfo()
        {
            Console.WriteLine("Meno Knihy: " + Name);
            Console.WriteLine("Autor: " + Author);
            Console.WriteLine("Datum vydania: " + Date);
        }

        public void assignDekel()
        {

        }
    }
}
