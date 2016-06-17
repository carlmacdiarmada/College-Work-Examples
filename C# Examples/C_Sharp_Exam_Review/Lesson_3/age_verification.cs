class Veri{
    static void Main()
    {
        Console.Write("Please enter your age: ");
        //get user input and store it in int age
        int age = int.Parse(Console.ReadLine());
        //if the adult method returns true allow them to drink
        if (Adult(age)){
            Console.WriteLine("You can have a drink");
        }else{
            //otherwise don't
            Console.WriteLine("Sorry, you can't drink");
        }

        //waits till the user presses enter before quiting
        Console.Read();
    }

    static bool Adult(int age){
        //if the age is 18 or more return true
        if(age >= 18){
            return true;
        }else{      //otherwise return false
            return false;
        }
    }
}
