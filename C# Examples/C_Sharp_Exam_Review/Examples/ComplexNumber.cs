using System;

namespace Examples
{
	//a struct for complex numbers
	public struct ComplexNumber
	{
		//fields
		private float real;
		private float imaginary;

		//getter and setter methods
		public float Real {
			get {
				return real;
			}
			set {
				real = value;
			}
		}
		public float Imaginary {
			get {
				return imaginary;
			}
			set {
				imaginary = value;
			}
		}

		//default constructor to setup complex number
		public ComplexNumber(float real, float imaginary){
			this.real = real;
			this.imaginary = imaginary;
		}

		//tells the program what to do if told to add two ComplexNumbers together using the + symbol
		//this is called operator overloading
		//static means that it can be called without initializing and instance of ComplexNumber
		public static ComplexNumber operator +(ComplexNumber a, ComplexNumber b)
		{
			//create a ComplexNumber to put the return value into
			ComplexNumber res;
			//initialize res as a complex number with the sums of the real parts of a and b
			//as the real part and the imaginary parts sum as the imaginary sum
			res = new ComplexNumber (a.Real + b.Real, a.Imaginary + b.Imaginary);
			//returns res
			return res;
		}

		//if this was for actual use I would suggest adding operator overloads for
		// * - / and unary minus

		//gives a string to return
		public override string ToString ()
		{
			return real + " + " + imaginary + "i";
		}

	}
}

