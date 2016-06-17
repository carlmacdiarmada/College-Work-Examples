using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;

namespace CirclesShapes
{
    public class Box:Shape
    {
        private float width;

        public float Width
        {
            get { return width; }
            set { width = value; }
        }

        public Box(Point centre, float width):base(centre)
        {
            this.width = width;
        }

        public override float Area()
        {
            return width * width;
        }

        public override string ToString()
        {
            return "Centre: " + Centre + " Width: " + Width + " Area: " + Area();
        }
    }
}
