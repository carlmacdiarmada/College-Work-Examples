using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;

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

        static void PrintExpenses(string toFind, bool byParty)
        {
            float total = 0.0f;
            float min = float.MaxValue;
            float max = float.MinValue;
            int minIndex = 0, maxIndex = 0;
            bool found = false;
            for (int i = 0; i < expenses.Length; i++)
            {
                if ((byParty && expenses[i].Party.ToLower() == toFind) || (!byParty && expenses[i].Region.Substring(0,3).ToLower() == toFind.Substring(0,3)))
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
            string message;
            if (byParty)
            {
                message = "Party";
            }
            else
            {
                message = "Constituency";
            }
            if (found)
            {
                Console.WriteLine("Total claimed for " + message + ": " + toFind + " was " + total);
                Console.WriteLine("Minimum claimed from " + message + ": " + toFind + " was " + expenses[minIndex].Total + " by " + expenses[minIndex].Name);
                Console.WriteLine("Maximum claimed from " + message + ": " + toFind + " was " + expenses[maxIndex].Total + " by " + expenses[maxIndex].Name);
            }
            else
            {
                Console.WriteLine(message + ": " + toFind  + " not found");
            }
        }

        static void Main(string[] args)
        {
            LoadExpenses("../../expenses.txt");
            while (true)
            {
                Console.WriteLine("Enter C to search by first 3 letters of the constituency or P to search by party  or \"quit\" to quit");
                string q = Console.ReadLine().ToLower();
                if (q == "quit")
                {
                    break;
                }
                if (q == "c")
                {
                    Console.WriteLine("Enter the first three letters of a constituency  or \"quit\" to quit");
                    string consit = Console.ReadLine().ToLower();
                    if (consit == "quit")
                    {
                        break;
                    }
                    PrintExpenses(consit.ToLower().Substring(0, 3), false);
                }
                else if (q == "p")
                {
                    Console.WriteLine("Enter the name of a party or \"quit\" to quit");
                    string party = Console.ReadLine().ToLower();
                    if (party == "quit")
                    {
                        break;
                    }
                    PrintExpenses(party, true);
                }                
            }
        }
    }
}
