Lesson 2
================  

##Input and Output
Most programs we work with have some form of input and output for information. We will introduce one of the most simple forms of input and output available to us in C#. 
When we work with basic programs we are often dealing with a text window called the console, this can be command line on Windows, terminal on Mac and many forms 
of Linux, or some other console program altogether. In C# there is a simple way of printing out text to this console and reading in typed input, the syntax for outputting is 
as follows:<br>
```C#
//This outputs Some text to the Console
Console.Write("Some text");

//This Outputs Different text to Console and moves onto a new line
Console.WriteLine("Different text");
``` 
The syntax for input is:<br>
```C# 
String name;
//This reads the users input up to a return carriage and stores it in the String name
name = Console.ReadLine();
```
There is another command for reading single characters that we won't talk about right now as it is somewhat more complicated and require things that we haven't touched yet.

We can use the output commands to print the value of variables to the screen:
```C#
String name = "John";
//Outputs Name: John
Console.WriteLine("Name: " + name);

int age = 15;
//Outputs Age: 15
Console.WriteLine("Age: " + age);
``` 

##Changing Variables
Variables can be altered and changed in many ways, numeric variable types like int and float can have arithmetic functions preformed on them (addition, multiplication, subtraction, division). 
###Arithmetic
Simple arithmetic functions can be preformed on int values with the '=' symbol meaning make the left equal to what is on the right
```C#
int x = 5;

//make x = to x + 5  	
x = x + 5;

//double x  				
x = x * 2;

//subtract 2 from x
x = x - 2;

//divide  x  by 6
x = x / 6;
```
The above can be shortened to ( x += 5; means x is equal to x + 5, and so on)
```C#
int x = 5;

//make x = to x + 5  	
x += 5;

//double x  				
x *= 2;

//subtract 2 from x
x -= 2;

//divide  x  by 6
x /= 6;
```
We can also preform these on multiple variables
```C#
int x = 5;
int y = 7;
//(x =  5 + 7 = 12)
x = x + y;

//(x = 12 * 7 = 84)
x = x * y;

//(y = 84 - 2 = 82)
y = x - 2;
``` 
Hopefully you get the idea from that, it is important to note you can set the value of a variable to something different if you want
```C# 
int x = 9;
//change x 
x = 12;
```

###Mod (Remainder)
C# has a built in way of getting remainders, when 7 is divided by 4 you get a remainder of 3, which you will use time and time again.
```C# 
int x = 9;
//Print out the remainder of 9 / 4 
Console.WriteLine("Nine mod 4 is " + x % 4);
//note the % is the symbol used to get the mod 
```
###Adding to Strings
So you have a String but you want to add a full stop at the end, or another sentence, C# makes it very easy for us to do that:
```C#
String name = "Severus";
//name starts as Severus
name = name + " Snape";
//now it's Severus Snape
name +=  '!';
//now Severus Snape!
Console.WriteLine(name + " is awesome!!");
``` 

##Example time
Now go to [Calculator.cs](https://github.com/Xaeonn/C_Sharp_Tutorial/blob/master/Lesson_2/Calculator.cs) and try and see how much of it you understand. If you haven't already, download Visual Studio Express, or Xamarin, and create a new C# Console project.
Once you have done that there will be a file called Program.cs, open that delete all the current contents and copy the code from Calculator.cs into it. Run it a few times and make sure you understand.

###Exercise
Alter Calculator.cs in Visual Studio so that it multiplies three numbers together and outputs the result.