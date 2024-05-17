//public class Dog
//{

//}

//class Program
//{
//    static void Main()
//    {
//        Dog myDog = new Dog();  
//    }
//}





public class Employee
{
    // Vlastnosti zamestnanca
    public string FirstName { get; set; }
    public string LastName { get; set; }
    public int Age { get; set; }
    // Konštruktor pre vytvorenie zamestnanca a inicializácioa údajov
    public Employee(string firstName, string lastName, int age)
    {
        FirstName = firstName;
        LastName = lastName;
        Age = age;
    }
    // Metóda na výpis informácii o zamestnancovi
    public void PrintEmployeeInfo()
    {
        Console.WriteLine($"Meno: {FirstName} {LastName}");
        Console.WriteLine($"Vek: [Age] rokov");
    }
}
class Program
{
    static void Main()
    {
        // Vytvorenie novej inštancie triedy Employee
        Employee employeel = new Employee("John", "Doe", 30);
        employeel.PrintEmployeeInfo();
    }
}