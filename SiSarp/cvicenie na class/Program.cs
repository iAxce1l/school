// rok vydania, nazov, autor, pocet stran

// trieda book
public class Book
{
    // vlastnosti
    public string nazov { get; set; }
    public string autor { get; set; }
    public int rokvydania { get; set; }
    public int pocetstran { get; set; }

    //Konštruktor
    public Book(string Nazov, string Autor, int Rokvydania, int Pocetstran)
    {
        nazov = Nazov;
        autor = Autor;
        rokvydania = Rokvydania;
        pocetstran = Pocetstran;
    }

    //Metoda
    public void printBookInfo()
    {
        Console.WriteLine("Kniha: " +  nazov);
        Console.WriteLine("Autor: " + autor);
        Console.WriteLine("Rok vydania: " + rokvydania);
        Console.WriteLine("Pocet stran: " + pocetstran);
    }
}

class Program
{
    static void Main()
    {
        Book book1 = new Book("Pištove trampoty", "Pišta (Števo)", 2023, 455);

    }
}
