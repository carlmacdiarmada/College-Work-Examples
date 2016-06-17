using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;

namespace ABCFiles2012
{
    public class Tune
    {
        private int x;
        public int X
        {
            get { return x; }
            set { x = value; }
        }
        private string title;

        public string Title
        {
            get { return title; }
            set { title = value; }
        }
        private string altTitle;

        public string AltTitle
        {
            get { return altTitle; }
            set { altTitle = value; }
        }
        private string keySig;
        public string KeySig
        {
            get { return keySig; }
            set { keySig = value; }
        }
        private string timeSig;
        public string TimeSig
        {
            get { return timeSig; }
            set { timeSig = value; }
        }
        public Tune()
        {
            x = 0;
            title = "";
            altTitle = "";
            keySig = "";
            timeSig = "";
        }

        public Tune(int x, string title)
        {
            this.x = x;
            this.title = title;
            altTitle = "";
            keySig = "";
            timeSig = "";
        }

        public override string ToString()
        {
            string ret = "";
            ret += title;
            if (altTitle != "")
            {
                ret += "; " + altTitle;
            }
            if (keySig != "")
            {
                ret += "; " + keySig;
            }
            if (timeSig != "")
            {
                ret += "; " + timeSig;
            }
            return ret;
        }
    }
}
