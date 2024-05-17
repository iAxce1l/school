class Program { 
static void Main()
    {
        Car car = new Car(450);
        Console.WriteLine(car.Speed);
    }
}

class Car
{
    public int speed;
    public Car(int speed)
    {
        this.speed = speed;
    }
}
