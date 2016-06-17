using System;

namespace Examples
{
	// : Animal means that Lion inherits from the class animal
	//this means that Lion now has access to all the public and protected fields of Lion as if they were it's own
	//protected fields act like they are private fields of Lion and public act as if they are public fields
	//same with methods
	public class Lion : Animal
	{
		//Constructor for Lion 
		// :base(name, age) means that Lion is calling the inherited constructor from Animal with 
		//the parameters name and age
		public Lion (string name, int age) : base (name, age)
		{
			//empty for now could initialize some field unique to lions
		}

		//overrides the inherited virtual method makeNoise from Animal so that it returns an Lion noise 
		public override string makeNoise (){
			return "Roar!!!";
		}

		//overrides the ToSring methods for Lion
		public override string ToString (){
			return "Lion: " + name + " " + age + " years";
		}

	}
}

