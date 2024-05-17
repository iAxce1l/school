using System.Diagnostics.CodeAnalysis;

namespace _15._12._2023
{
    class Program
    {
        static void Main()
        {
            Dekel jankovaZiacka = new Dekel("Taky pekny", "Hlinik");
            Book KovalcikoveVraky = new Book("Kovalcikove Vraky", "Kolacik", DateOnly.FromDateTime(DateTime.Now), jankovaZiacka);
            KovalcikoveVraky.nasadDekel(jankovaZiacka);
            KovalcikoveVraky.PrintInfo();
            Autor janko = new Autor("Jan", "Kovalcik");
            Publisher publisher1 = new Publisher("Vydavatelstvo Ba", "Bratislava");
            janko.PrintInfo();
            Console.WriteLine(KovalcikoveVraky.Nazov);
            KovalcikoveVraky.priradPublishera(publisher1);
            ebook TurboCiska = new Ebook("Jak vymenic turbo", "Daňo", DateOnly.FromDateTime(DateTime.Now), jankovaZiacka, "elektronicka");
            TurboCiska.PrintEbookInfo();
        }
    }
}