using System;

public class Prog
{
    public static void Main()
    {
        //Zadanie 1
        int[] tab = new int[5];
        for (int i = 0; i < tab.Length; i++)
        {
            Console.Write($"wpisz liczbe {i+1}: ");
            tab[i] = int.Parse(Console.ReadLine());
        }
        for (int i = 0; i < tab.Length; i++)
        {
            if (i == tab.Length - 1) { Console.WriteLine($"{tab[i]}"); }
            else { Console.Write($"{tab[i]},"); }
        }

        Console.WriteLine();
        Console.WriteLine();
        Console.WriteLine();

        //Zadanie 2
        double[] table2 = new double[10];
        for (int i = 0; i < table2.Length; i++)
        {
            table2[i]=new Random().NextDouble();
        }
        //sprawdzanie tablicy
        //for (int i = 0; i < table2.Length; i++)
        //{
        //    if (i == table2.Length - 1) { Console.WriteLine($"{table2[i]}"); }
        //    else { Console.Write($"{table2[i]},"); }
        //}
        Console.WriteLine($"Suma wszystkich elementow: {table2.Sum()}");
        Console.WriteLine($"Srednia arytmetyczna wszystkich elementow:{table2.Average()}");

    }
}
