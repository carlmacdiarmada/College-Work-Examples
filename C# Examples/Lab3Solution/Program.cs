using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;

namespace Alcohol
{
    // Part 1
    struct Point 
    {
        private float x;
        public float X
        {
            get 
            { 
                return x; 
            }
            set { x = value; }
        }
        private float y;
        public float Y
        {
            get { return y; }
            set { y = value; }
        }

        public override string ToString()
        {
            return "(" + x + ", " + y + ")";
        }
    }

    struct Circle
    {
        private Point centre;
        public Point Centre
        {
            get 
            { 
                return centre; 
            }
            set 
            { 
                centre = value;
            }
        }
        private float radius;
        public float Radius
        {
            get { return radius; }
            set { radius = value; }
        }

        public float Circumference
        {
            get
            {
                return 2.0f * 3.14f * radius;
            }
        }

        public float Area
        {
            get
            {
                return 3.14f * radius * radius;
            }
        }

        public override string ToString()
        {
            return "Centre: " + centre + " Radius: " + radius + " Circumference: " + Circumference + " Area:" + Area;
        }
    }

    // Part 2
    struct Consumption
    {
        public Consumption(string name, int amt)
        {
            this.name = name;
            this.amount = amt;
        }
        private string name;
        public string Name
        {
            get { return name; }
            set { name = value; }
        }

        private int amount;

        public int Amount
        {
            get { return amount; }
            set { amount = value; }
        }

        public string SafetyNotice
        {
            get
            {
                if (amount < 16)
                {
                    return "Safe";
                }
                else if ((amount >= 16) && (amount <= 21))
                {
                    return "Warning";
                }
                else
                {
                    return "Excessive";
                }
            }
        }

        public override string ToString()
        {
            return name + "\t" + amount + "\t" + SafetyNotice;
        }
        
    }

    class Program
    {
        static void Main(string[] args)
        {
            Circle c = new Circle();
            Point p = new Point();
            p.X = 100;
            p.Y = 200;
            c.Centre = p;
            c.Centre = new Point();
            //c.Centre.X = 100;
            //c.Centre.Y = 100;
            c.Radius = 10;
            Console.WriteLine(c);

            Consumption[] consumption = new Consumption[10];
            
            consumption[0].Name = "Pat"; consumption[0].Amount = 12;
            consumption[1].Name = "Francios"; consumption[1].Amount = 18;
            consumption[2].Name = "Bryan"; consumption[2].Amount = 10;
            consumption[3].Name = "Derek"; consumption[3].Amount = 25;
            consumption[4].Name = "Mario"; consumption[4].Amount = 35;
            consumption[5].Name = "Shane"; consumption[5].Amount = 12;
            consumption[6].Name = "Millhouse"; consumption[6].Amount = 0;
            consumption[7].Name = "Stephen"; consumption[7].Amount = 0;
            consumption[8].Name = "Barry"; consumption[8].Amount = 10;
            consumption[9].Name = "Liam"; consumption[9].Amount = 40;

            foreach (Consumption con in consumption)
            {
                Console.WriteLine(con);
            }
        }
    }
}
