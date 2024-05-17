/////////////////////////////////////////////////// Vytvorenie Metody
SayHI();
static void SayHI()
{
    Console.WriteLine("Hi.");
}
/////////////////////////////////////////////////// Metoda s parametrom
SayHI2("Janes");
static void SayHI2(string name) => Console.WriteLine("Hi " + name + ".");
/////////////////////////////////////////////////// Metoda s dvomi parametrami
SayHI3("Janes2", 45);
static void SayHI3(string name, int age) => Console.WriteLine("Ahoj " + name + " máš " + age + " rokov.");
/////////////////////////////////////////////////// Metoda s navratovou hodnotou
Console.WriteLine(kubickaHodnota(5));

int x = kubickaHodnota(10);
Console.WriteLine(x);

static int kubickaHodnota(int hodnota)
{
    int result = hodnota * hodnota * hodnota;
    return result;
}
/////////////////////////////////////////////////// Uloha vytvor metódu
static double CalculateDiscount(double price, double discount)
{
    double result = price * ((discount / 100) + 1);
    return result;
}

Console.WriteLine(CalculateDiscount(50, 10));