using Book;

namespace _15._12._2023
{
    class Program
    {
        static void Main()
        {
            Dekel dekel1 = new Dekel("Farebny", "Papier");
            Book Book1 = new Book("Kovalcikove Vraky", "Kolacik", DateOnly.FromDateTime(DateTime.Now), dekel1);
        }
    }
}
            