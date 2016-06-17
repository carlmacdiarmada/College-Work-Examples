using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;

namespace CirclesShapes
{
    class Line
    {
        private Point start;

        public Point Start
        {
          get { return start; }
          set { start = value; }
        }

        private Point end;

        public Point End
        {
          get { return end; }
          set { end = value; }
        }

        public Line(Point start, Point end)
        {
            this.start = start;
            this.end = end;
        }

        public Line():this(new Point(), new Point())
        {
        }

        public float Slope
        {
            get
            {
                return (end.Y - start.Y) / (end.X - start.X);
            }
        }

        public float Intercept
        {
            get
            {
                return start.Y - (Slope * start.X);
            }
        }

        public override string ToString()
        {
            return "Start: " + start + " End: " + end + " Slope: " + Slope + " Intercept: " + Intercept;
        }

    }
}
