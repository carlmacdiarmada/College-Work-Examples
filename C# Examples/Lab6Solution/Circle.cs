using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;

namespace CirclesShapes
{
    public class Circle:Shape
    {
        private float radius;

        public float Radius
        {
            get { return radius; }
            set { radius = value; }
        }

        public Circle(Point centre, float radius)
            : base(centre)
        {
            this.radius = radius;
        }

        public override float Area()
        {
            return ((float) Math.PI) * radius * radius;
        }

        public override string ToString()
        {
            return "Centre: " + Centre + " Width: " + Radius + " Area: " + Area();
        }
    }
}
