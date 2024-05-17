//// 1 uloha

int mocnina = 0;
int num = 0;
int num1 = 0;
int num2 = 0;
int num3 = 0;
int polomer = 0;
int polomer3 = 0;
double objem = 0;
double division = 0;


Console.WriteLine("Zadajte číslo:");
while (!int.TryParse(Console.ReadLine(), out num))
{
    Console.WriteLine("Zadaj platné číslo:");
}

mocnina = num * num;
Console.WriteLine("Druhá mocnina vašeho čísla je: " + mocnina);

//2 uloha

static void uloha2(int num1, int num2, int num3)
{
    

    Console.WriteLine("Zadajte 1. číslo:");
    while (!int.TryParse(Console.ReadLine(), out num1));
    {
        Console.WriteLine("Zadaj platné číslo:");
    }

    Console.WriteLine("Zadajte 2. číslo:");
    while (!int.TryParse(Console.ReadLine(), out num2));
    {
        Console.WriteLine("Zadaj platné číslo:");
    }

    Console.WriteLine("Zadajte 3. číslo:");
    while (!int.TryParse(Console.ReadLine(), out num3));
    {
        Console.WriteLine("Zadaj platné číslo:");
    }

    if (num1 > num2 && num1 > num3)
    {
        Console.WriteLine(num1);
    }
    else if (num2 > num1 && num2 > num3) 
    {
        Console.WriteLine(num2);
    }
    else if (num3 > num1 && num3 > num2)
    {
        Console.WriteLine(num2);
    }
    else
    {
        Console.WriteLine("Daco plano");
    }
    
}
int num11 = Convert.ToInt32(Console.ReadLine());
int num12 = Convert.ToInt32(Console.ReadLine());
int num13 = Convert.ToInt32(Console.ReadLine());
uloha2(num11, num12, num13);

// 3 uloha

Console.WriteLine("Zadajte polomer gule:");
while (!int.TryParse(Console.ReadLine(), out polomer))
{
    Console.WriteLine("Zadaj platné číslo:");
}
division = 4 / 3;
polomer3 = polomer * polomer * polomer;
Console.WriteLine(polomer3);

objem = division * Math.PI * polomer3;
Console.WriteLine("Objem gule s polomerom " + polomer + " je: " + objem);