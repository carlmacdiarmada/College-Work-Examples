using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;

namespace StringsLab
{
    class Program
    {
        // Part A
        static int lolCount(string s)
        {
            int count = 0;
            String toFind = "lol";

            int location = 0;
            while (location != -1)
            {
                location = s.IndexOf(toFind, location);
                if (location != -1)
                {
                    location += toFind.Length;
                    count++;
                }
            }

            return count;
        }

        // Part B
        static string cypher(string message, int key)
        {
            string returnVal = "";

            for (int i = (message.Length - 1); i >= 0; i--)
            {
                char c = message[i];
                c += (char) key;
                returnVal += c;
            }

            return returnVal;
        }

        static string encrypt(string message)
        {
            return cypher(message, 1);
        }

        static string decrypt(string message)
        {
            return cypher(message, -1);
        }

        static void Main(string[] args)
        {
            // Part A
            string s1 = "Wow that was so funny lol.";
            Console.WriteLine("The lolcount of " + s1 + " is " + lolCount(s1));
            string s2 = "lol!! I laughed so rhard! lol";
            Console.WriteLine("The lolcount of " + s2 + " is " + lolCount(s2));            
            string s3 = "U r lame. lol lol lol";
            Console.WriteLine("The lolcount of " + s3 + " is " + lolCount(s3));            
            string s4 = "lollollollollollollollol!!!!!";
            Console.WriteLine("The lolcount of " + s4 + " is " + lolCount(s4));      
      
            // Part B
            string s = "The desired result";
            Console.WriteLine("Original string: " + s);
            Console.WriteLine("Encrypted string: " + encrypt(s));

            string en = "umvtfs!efsjtfe!fiU";
            Console.WriteLine("Decrypted string: " + decrypt(en));

            // Part B
            Console.WriteLine(encrypt("I Love programming. programming is Easy."));
            Console.WriteLine(encrypt("The theme of this years XNA Ireland Challenge is... Tanks!"));
            Console.WriteLine(encrypt("DIT Rocks"));
            Console.WriteLine(encrypt("The best line of code you ever wrote is the line you didnt have to write"));
        }
    }
}
