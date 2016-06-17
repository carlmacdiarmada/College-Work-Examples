using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.IO;
namespace Expenses
{
    class Program
    {
        static Expense[] expenses;
        static void LoadExpenses(string filename)
        {
            string[] lines = System.IO.File.ReadAllLines(filename);
            expenses = new Expense[lines.Length];
            for (int i = 0; i < lines.Length; i++)
            {
                expenses[i] = new Expense(lines[i]);
            }
        }
        static void PrintExpenses(string party)
        {
            float total = 0.0f;
            float min = float.MaxValue;
            float max = float.MinValue;
            int minIndex = 0, maxIndex = 0;
            bool found = false;
            for (int i = 0; i < expenses.Length; i++)
            {
                if (expenses[i].Party == party)
                {
                    found = true;
                    Console.WriteLine(expenses[i]);
                    total += expenses[i].Total;
                    if (expenses[i].Total > max)
                    {
                        max = expenses[i].Total;
                        maxIndex = i;
                    }
                    if (expenses[i].Total < min)
                    {
                        min = expenses[i].Total;
                        minIndex = i;
                    }
                }
            }
            if (found)
            {
                Console.WriteLine("Total claimed for party: " + party + " was " + total);
                Console.WriteLine("Minimum claimed from party: " + party + " was " + expenses[minIndex].Total + " by " + expenses[minIndex].Name);
                Console.WriteLine("Maximum claimed from party: " + party + " was " + expenses[maxIndex].Total + " by " + expenses[maxIndex].Name);
            }
            else
            {
                Console.WriteLine("Party " + party  + " not found");
            }
        }
        static void Main(string[] args)
        {
            LoadExpenses("../../expenses.txt");
            while (true)
            {
                Console.WriteLine("Enter the name of a party or \"quit\" to quit");
                string party = Console.ReadLine();
                if (party.ToLower() == "quit")
                {
                    break;
                }
                PrintExpenses(party);
            }
        }
    }
}
