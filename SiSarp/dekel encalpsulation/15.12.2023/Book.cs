using System;

namespace _15._12._2023
{
    internal class Book
    {
        public string Nazov { get; set; }
        public string Autor { get; set; }
        public DateOnly Datum { get; set; }
        public Dekel KnihosDekelos;
        public Publisher KnihosVydavatelos;
        

        public Book(string nazov, string autor, DateOnly datum, Dekel dekelos)
        {
            Nazov = nazov;
            Autor = autor;
            Datum = datum;
            KnihosDekelos = dekelos;
        }
        public void PrintInfo()
        {
            Console.WriteLine("Meno Knihy: " + Nazov);
            Console.WriteLine("Autor: " + Autor);
            Console.WriteLine("Datum vydania: " + Datum);
        }
        public void nasadDekel(Dekel deklik)
        {
            KnihosDekelos = deklik;
        }
        public void priradPublishera(Publisher publisher)
        {
            KnihosVydavatelos = publisher;
        }
    }
}
