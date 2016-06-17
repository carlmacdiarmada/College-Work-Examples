using System;

namespace Examples
{
	// : Animal means that bear inherits from class animal
	public class Bear : Animal
	{
		//Constructor for Bear 
		// :base(name, age) means that Lion is calling the inherited constructor from Animal with 
		//the parameters name and age
		public Bear (string name, int age) : base (name, age)
		{
		}

		//overrides the inherited virtual method makeNoise from Animal so that it returns an Bear noise 
		public override string makeNoise (){
			return "Grrrrr!!!";
		}
		//overrides the ToString methods for Bear
		public override string ToString (){
			return "Bear: " + name + " " + age + " years";
		}
	}
}

