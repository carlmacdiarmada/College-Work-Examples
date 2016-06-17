using System;

namespace Examples
{
	public class Animal
	{
		//fields
		//protected is what is called an access specifier
		//there are three types of access specifiers in C# (that you need to know about for now)
		//public		--		the field or method can be accessed by any by any code using the class
		//private		--		the field or method can only be accessed by the internal workings of the class itself 
		//protected		--		the field or method can be accessed by child classes but not by programs using the object
		protected string name;
		protected int age;
		//properties (getter and setters)
		public string Name {
			get {
				return name;
			}
			set {
				name = value;
			}
		}
		//only has getter because age can't change without having a birthday which is a seperate method
		public int Age {
			get {
				return age;
			}
		}

		//Constructor
		public Animal (string name, int age)
		{
			this.name = name;
			this.age = age;
		}

		//increases age of animal
		public void hasBirthday(){
			age++;
		}

		//a virtual method allows child classes to override the method
		public virtual string makeNoise(){ return ""; }


	}
}

