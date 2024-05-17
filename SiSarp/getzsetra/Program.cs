class Program
{
    static void Main()
    {
        myClass obj = new MyClass();
        obj.SetMyField(10);
        int value = obj.GetMyField();
        Console.WriteLine(value);

        myClassM obj2 = new myClassM();
        obj2.MyField = 10;
    }
}


class MyClass
{
    private int myField;
    public int GetMyField()
    {
        return myField;
    }

    public void SetMyField(int value)
    {
        myField = value;
    }
}

class myClassM
{
    private int myField;
    public int MyField
    {
        get { return myField; }
        set { myField = value; }
    }
}