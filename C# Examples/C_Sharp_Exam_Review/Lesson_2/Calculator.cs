//This is telling the computer we want to use a library called System, this is a file that gives us access to commands like Console.WriteLine()
using System;

//ignore this for now we will discuss this in later lessons
class Calc
{
    //static void Main() is whats called a method, we will go into methods in more detail later
    //for now all you need to know is the program always starts at the method Main()
    static void Main()
    {
        //declare ints called numberA and numberB
        int numberA;
        int numberB;
        //Write instructions to the Console
        Console.Write("Please enter a number to add: ");
        //Get a line of user input and store it in numberA
        //the int.Parse is a command, or method to be more accurate,
        //that changes a string into an int for us
        numberA = int.Parse(Console.ReadLine());

        Console.Write("Please enter a number to add: ");
        //same as above but putting the input into numberB
        numberB = int.Parse(Console.ReadLine());

        int sum = numberA + numberB;
        //print the sum to the screen
        Console.WriteLine(numberA + " + " + numberB + " = " + sum);

        //waits till the user presses enter before quiting
        Console.Read();
    }
}
