char[] secretWord = { 'S', 'S', 'O', 'S', 'T', 'A' };
char[] guessedWord = new char[secretWord.Length];
int guessLimit = secretWord.Length * 2;
int guessCount = 0;

//[x,x,x,x,x,x]

for (int i = 0; i < secretWord.Length; i++)
{
    guessedWord[i] = 'x';
}

Console.WriteLine("Tvoje hádané slovo má " + secretWord.Length + " znakov");
Console.WriteLine("Máš " + guessLimit + " pokusov");


Console.Write("[");
for (int i = 0; i < secretWord.Length; i++)
{
    if (secretWord[i] != secretWord.Last())
    {
        Console.Write(guessedWord[i] + ",");
    }
    else
    {
        Console.Write(guessedWord[i]);
    }
}
Console.Write("]");

//[x,x,x,x,x,x]

char guess = Console.ReadKey().KeyChar;
Console.WriteLine(guess);

for (int i = 0; i < secretWord.Length; i++)
{
    if (guess == secretWord[i])
    {
        guessedWord[i] = guess;
        guessCount++;
    }

    else
    {
        guessCount++;
    }
}

