using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace DANI
{
    class NextWord
    {

        private string nextword;
        public string Nextword
        {
            get { return nextword; }
            set { nextword = value; }
        }

        private int wordCount;
        public int WordCount
        {
            get { return wordCount; }
            set { wordCount = value; }
        }

        public NextWord(string nextword, int wordCount)
        {
            this.nextword = nextword;
            this.wordCount = wordCount;

        }
    }
}
