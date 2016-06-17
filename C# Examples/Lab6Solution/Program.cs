using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;

namespace CirclesShapes
{
    class Program
    {
        static void Main(string[] args)
        {
            Point p1 = new Point(100, 100);
            Point p2 = new Point(300, 200);
            Line l = new Line(p1, p2);

            Console.WriteLine(p1);
            Console.WriteLine(p2);
            Console.WriteLine(l);

            Box b = new Box(p1, 100);
            Console.WriteLine(b);
            Circle c = new Circle(p2, 200);
            Console.WriteLine(c);

            Console.ReadLine();

        }
    }
}
