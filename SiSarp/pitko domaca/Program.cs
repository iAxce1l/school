int num1 = 0;
int num2 = 0;
int polomer = 0;
double dlzka = 0;
double sirka = 0;

// 1 uloha
Console.WriteLine("1. číslo:");
while (!int.TryParse(Console.ReadLine(), out num1))
{
  Console.WriteLine("Zadaj platné číslo:");
}

Console.WriteLine("2. číslo:");
while (!int.TryParse(Console.ReadLine(), out num2))
{
    Console.WriteLine("Zadaj platné číslo:");
}

int vysledok = num1 + num2;

Console.WriteLine("Výsledok sčítania je: " + vysledok);

// 2 uloha

Console.WriteLine("Zadaj polomer kruhu");
while (!int.TryParse(Console.ReadLine(), out polomer))
{
    Console.WriteLine("Zadaj platné číslo");

double obvod = 2 * Math.PI * polomer;
double obsah = Math.PI * polomer * polomer;

Console.WriteLine("Obvod kruhu je: " + obvod);
Console.WriteLine("Obsah kruhu je: " + obsah);

// 3 uloha

int[] hodnoty = new int[10];
for (int i = 0; i < 10; i++)
{
    hodnoty[i] = i + 1;
}

foreach (int hodnota in hodnoty)
{
    Console.WriteLine(hodnota);
}

// 4 uloha

Console.WriteLine("Zadajte meno a priezvisko: ");
string input = Console.ReadLine();

string[] mena = input.Split(' ');

string meno = mena[0];
string priezvisko = mena[1];

string menovelkym = char.ToUpper(meno[0]) + meno.Substring(1).ToLower();
string priezviskovelkym = char.ToUpper(priezvisko[0]) + priezvisko.Substring(1).ToLower();

string output = $"{priezviskovelkym} {menovelkym}";

Console.WriteLine($"Pôvodný vstup: {input}");
Console.WriteLine($"Výstup: {output}");

// 5 uloha

Console.WriteLine("Zadaj dlžku obdlžnika");
while (!double.TryParse(Console.ReadLine(), out dlzka))
    ;


{
    Console.WriteLine("Zadaj platné číslo");
}

Console.WriteLine("Zadaj širku obdlžnika");
while (!double.TryParse(Console.ReadLine(), out sirka))
    ;


{
    Console.WriteLine("Zadaj platné číslo");
}

static void vypocet(double dlzka, double sirka)
{
    double obvod = 2 * (dlzka + sirka);
    double obsah = dlzka * sirka;
    Console.WriteLine($"Obvod obdlžnika je: {obvod}");
    Console.WriteLine($"Obsah obdlžnika je: {obsah}");
}
;
 // 6 uloha
List<Task> tasks = new List<Task>();
bool end = false;
Console.WriteLine("Vitajte v spravcovi uloh");
while (!end)
{
    Console.WriteLine(
        "1. Pridat novu ulohu\n2. Zobrazit zoznam uloh\n3. Oznacit úlohu ako dokoncenu\n4. Ukoncit program"
    );
    string choice = Console.ReadLine();
    switch (choice)
    {
        case "1":
            AddTask();
            break;
        case "2":
            ShowTasks();
            break;
        case "3":
            MarkTaskAsCompleted();
            break;
        case "4":
            end = true;
            break;
        default:
            Console.WriteLine("Jedine moznosti su 1,2,3,4");
            break;
    }
}
void AddTask()
{
    Console.Write("Zadajte názov úlohy: ");
    string title = Console.ReadLine();
    Console.Write("Zadajte popis úlohy: ");
    string description = Console.ReadLine();
    int taskId = tasks.Count + 1;
    tasks.Add(new Task(tasks.Count + 1, title, description));
    Console.WriteLine($"Úloha {taskId} bola pridaná: {title}");
}
void ShowTasks()
{
    if (tasks.Count == 0)
    {
        Console.WriteLine("Nemate ulozene ziadne ulohy");
    }
    else
    {
        Console.WriteLine("Zoznam uloh");
        foreach (Task task in tasks)
        {
            Console.WriteLine(
                $"ID: {task.Id}, Nazov: {task.Title}, Popis: {task.Description}, Dokoncene: {task.Completed}"
            );
        }
    }
}
void MarkTaskAsCompleted()
{
    ShowTasks();
    Console.Write("Zadajte id ulohy, ktoru chcete marknut ako splnenu");
    if (int.TryParse(Console.ReadLine(), out int taskId))
    {
        Task taskToComplete = tasks.Find(t => t.Id == taskId); // lambda funkcia hlada t parameter a porovna ho s taskId co sme zadali a tym vyberie ulohu
        if (taskToComplete != null)
        {
            taskToComplete.Completed = true;
            Console.WriteLine($"Uloha {taskId} bola označená ako dokončená.");
        }
        else
        {
            Console.WriteLine("Uloha s takym id nebola najdena");
        }
    }
    else
    {
        Console.WriteLine("Neplatné ID. Skúste to znovu.");
    }
}

class Task
{
    public int Id;
    public string Title;
    public string Description;
    public bool Completed;

    public Task(int id, string title, string description) // konstruktor aby sme mohli vytvorit novy task
    {
        Id = id;
        Title = title;
        Description = description;
        Completed = false;
    }
}