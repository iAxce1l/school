// See https://aka.ms/new-console-template for more information
class Program
{
    static void Main()
    {
        MyClass obj = new MyClass();
        obj.SetMyField(20);
        int hodnotaPrivAtr = obj.GetMyField;
        Console.WriteLine(hodnotaPrivAtr);
    }
}

class MyClass
{
    private int myField;
    public void SetMyField(int value)
    {
        myField = value;
    }
    public int GetMyField()
    {
        return myField;
    }
}
