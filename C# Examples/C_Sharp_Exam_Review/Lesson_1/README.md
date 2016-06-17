Lesson 1 
================  
When you start programming it can all be quite overwhelming, between variables, control statements, loops, methods, classes, and so many keywords. My goal is to try and simplify this somewhat.

##Variables
Variables are the heart of C#, and indeed many other languages. It can be easy to get lost the first time you encounter them, experienced programmers are so used to using them they often 
forget to explain them properly. <br>
Any variable will be declared like this:<br>
```C#
variable_type name_of_variable;
```
eg
```C#
int number;
```
This is telling the computer to create a variable of type int, integers (whole numbers), with the name number. Variables can also be declared with values assigned to them on creation:
```C#
variable_type name_of_variable = value;
```
eg
```C#
int number = 9;
```

Here is a list of the basic variable types you will encounter and use constantly throughout your C# programming experience:

Variable Name | What it stores
------------- | ------------- 
int			  | any whole number between -2,147,483,648 and 2,147,483,647 inclusive
char		  | any character including symbols
float		  | any decimal number (32 bit)
String		  | a series of characters
double		  | any decimal number (64 bit)
bool		  | true or false
byte		  | any integer between 0 and 255 inclusive
long		  | any whole number (64 bit)

Here are examples of the most common ones 
```C#
int age = 20;
char gender = 'M';
float pi = 3.14f;
String name = "Carl";
bool living = true;
```
Note that the char has single quotes around the value ('M') and the String has double quotes around it ("Carl").

##Comments

Comments are a way of putting notes to yourself and other people reading your code that doesn't affect the program itself. This is very 
helpful for the readability of your code both for yourself after leaving it for a while and for others using or changing your code. It is a good idea 
when you start to leave comments as you go along saying what you are doing in English, or any other language. Doing this will both help you 
have a better idea of what you are doing at the time, keeping you from getting to bad 'spaghetti code', and help you when you go back over it to find 
bugs or make changes. 
```C#
//This is a commented out line
/* 
This comments out anything between the / * and * / (added spaces so it doesn't affect the code here)
and can be used to comment multiple lines
*/
```
