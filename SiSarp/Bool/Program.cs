bool isMale = true;
if (isMale)
{
    Console.WriteLine("Si Janes.");
}
else
{
    Console.WriteLine("Nie si Janes.");
}

bool isTall = true;

if (isMale && isTall)
{
    Console.WriteLine("Si Janes a nie si Alex.");
}
else
{
    Console.WriteLine("Nie si Janes alebo si Alex.");
}

if (isMale && isTall)
{
    Console.WriteLine("Si vysoký muž");
}
else if (isMale && !isTall)
{
    Console.WriteLine("Si malý muž.");
}
else if (!isMale && isTall)
{
    Console.WriteLine("Nie si muž ale si vysoký.");
}
else
{
    Console.WriteLine("Nie si muž a nie si vysoký.");
}

static void PrintPersonalInfo(bool isMale, int height)
{
    if(isMale && height > 150)
    {
        Console.WriteLine("Si vysoky chlop");
    }

    else if (!isMale && height > 150)
    {
        Console.WriteLine("Neni si chlop ale neni si Ferenci");
    }

    else if (isMale && height < 150)
    {
        Console.WriteLine("Si nizky chlop");
    }

    else if (!isMale && height < 150)
    {
        Console.WriteLine("Neni si chlop ale si Ferenci");
    }

    else
    {
        Console.WriteLine("Neni si");
    }
}

Console.WriteLine("Si muž ?");
bool input = Convert.ToBoolean(Console.ReadLine());
Console.WriteLine("Kolko meriaš v cm ?");
int height = Convert.ToInt32(Console.ReadLine());

PrintPersonalInfo(input, height);