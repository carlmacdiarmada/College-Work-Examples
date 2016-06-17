using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;

namespace CirclesShapes
{
    public class Point
    {
        private float x;

        public float X
        {
            get { return x; }
            set { x = value; }
        }
        private float y;

        public float Y
        {
            get { return y; }
            set { y = value; }
        }

        public Point(float x, float y)
        {
            this.x = x;
            this.y = y;
        }

        public Point():this(0,0)
        {
        }

        public override string ToString()
        {
            return "X: " + x + "Y: " + y;
        }
    }
}
