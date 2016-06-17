using System;

namespace Examples
{
	//declares class Person as public (can be used by other classes)
	public class Person
	{
		//fields (variables in an onject are called fields)
		private int age;
		private string name;
		private string surname;

		//create public accessors (Properties) for the private variables via getter and setter methods
		public int Age {
			get {
				return age;
			}
			set {
				age = value;
			}
		}
		public string Name {
			get {
				return name;
			}
			set {
				name = value;
			}
		}
		public string Surname {
			get {
				return surname;
			}
			set {
				surname = value;
			}
		}

		//default constructor (called automatically when the object is inialized somwhere else)
		public Person (string name, string surname, int age)
		{
			//this points to the current instance of the object from within the object
			this.name = name;
			this.surname = surname;
			this.age = age;
		}

		//allows the object to be called as a string
		public override string ToString ()
		{
			//tells the override to return the name and the surname field
			return name + " " + surname;
		}

		//a method that can be called on the object to increase the age of the person by one 
		public void hasBirthday(){
			age++;
		}
	}
}

