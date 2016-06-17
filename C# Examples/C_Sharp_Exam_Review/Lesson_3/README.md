Lesson 3
================  

##Methods
Say you have something that you want to do in lots of different places in your program, getting the square of a number for example.
Methods give you a way of writing that code once instead of every time you want to square something.
```C#
return_type method_name (parameters){
	//code
	return value;
}
```
Now that will probably look confusing if it is your first encounter with them, don't worry if you don't understand. The layout was
shown above to make it easier to explain how methods work. First lets talk about the parameters, parameters are variables that a
function requires when it is called.
```C#
void printNum(int number){
	Console.WriteLine(number);
}

//Main method is where the program always starts
int Main(){
	//calling the method
	printNum(7);
	//Will print 7
}
```
Return type, every function in C# has a return type which the method must give a value for. These values are sent back by the return
statement:
```C#
int sum(int x, int y){
	return x + y;
}

int Main(){
	Console.Write("Please enter a number: ");
	int x = int.Parse(Console.ReadLine());
	Console.Write("Please enter a number: ");
	int y = int.Parse(Console.ReadLine());
	//calling the method
	int s = sum(x, y);
	Console.WriteLine(x " + " + y + " = " + s);
	//will print the sum of the two numbers the user enters
}
```

##Control Statements
All we have done so far is very linear, your code makes no choices and always runs the same set of instructions. When you are programming
you will constantly want the program to do one thing under one condition and another under different conditions. There are three main ways
of doing this in C#.
###if
if statements will be your constant companion as you write programs, it does pretty much what the name suggests. if a condition is true then
do something:
```C#
if(condition){
	//code
}
```
This condition can be a either very simple or quite complex, typical conditions would be something like these
```C#
int x = int.Parse(Console.ReadLine());
if(x < 10){
	Console.WriteLine("x is less than ten");
}

//!= means not equal to
if(x != 1){
	Console.WriteLine("x is not one");
}

//-= means equal to
if(x == 3){
	Console.WriteLine("x is three");
}
```

###else
Now say you want to do something if a condition is met, and something else if it isn't. Some of you may have noticed that you could do this using
a different if after the first one, eg:
```C#
if(x >= 18){
	Console.WriteLine("Have a drink!");
}
if(x < 18){
	Console.WriteLine("You're to young!");
}
```
There is a simpler way to do this however. The else statement simply executes if and only if the if statement before it isn't executed:
```C#
if(condition){
	//code
}
else{
	//code
}
```
###else if
This can be extened to say do something if a condition is met otherwise if a different condition is met do something else:
```C#
if(condition){
	//code
}
else if(condition){
	//code
}
```

##Examples
age_verification.cs is a simplified example of a system of checking a users age, these systems are commonly used on websites like
steam and other age sensitive materials to remove liability.

###Exercises
A suggested exercise is to try and write a program to check a users age based on their date of birth. You can enter the current date into
your program against it or use the C# DateTime object:
```C#
//gives you todays day of the month as an int
int day = DateTime.Now.Day;
//month as an int
int month = DateTime.Now.Month;
//year
int year = DateTime.Now.Year;
```
