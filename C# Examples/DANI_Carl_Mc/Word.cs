using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace DANI
{
    class Word
    {

        private string words;
        public string Words
        {
            get { return words; }
            set { words = value; }
        }

        private List<NextWord> nextWord;
        public List<NextWord> NextWord
        {
            get { return nextWord; }
            set { nextWord = value; }
        }

        private bool firstWord;
        public bool FirstWord
        {
            get { return firstWord; }
            set { firstWord = value; }
        }

        public Word(string words, string nextW, bool firstWord)
        {
            this.words = words;
            this.firstWord = firstWord;

            nextWord = new List<NextWord>();

            if (nextW != null)
            {
                nextWord.Add(new NextWord(nextW, 1));
            }
            else
            {
                nextWord.Add(new NextWord(".", 1));
            }


        }
    }
}
