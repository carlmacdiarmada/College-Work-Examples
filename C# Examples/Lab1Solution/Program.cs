using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;

namespace ConsoleApplication1
{
    class Program
    {
        static void Main(string[] args)
        {
            for (int i = 0; i < 21; i++)
            {
                int numSpaces = 0;
                if (i < 10)
                {
                    numSpaces = i;
                }
                else
                {
                    numSpaces = 20 - i;
                }
                for (int j = 0; j < numSpaces; j++)
                {
                    Console.Write(" ");
                }
                Console.WriteLine("I Love DIT!!");
            }

            int prev = 0;
            int current = 1;
            Console.WriteLine("0");
            while (current < 200)
            {
                Console.WriteLine(current);
                int temp = current;
                current = current + prev;
                prev = temp;
            }

            float a = 2.0f, b = -4.0f, c = -3.0f;
            float disc = 0.0f;
            float x1 = 0.0f, x2 = 0.0f;

            float f = float.Parse(Console.ReadLine());

            disc = (b * b) - (4.0f * a * c);
            if (disc < 0.0f)
            {
                Console.WriteLine("No roots");
            }
            else
            {
                x1 = (-b + (float) Math.Sqrt(disc)) / (2.0f * a);
                x2 = (-b - (float) Math.Sqrt(disc)) / (2.0f * a);
            }

        }


    }
}
