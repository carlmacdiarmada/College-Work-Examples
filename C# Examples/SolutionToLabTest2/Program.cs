using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;

namespace ABCFiles2012
{
    class Program
    {
        static List<Tune> tunes = new List<Tune>();

        static void PrintTunes(string keyword)
        {
            foreach (Tune t in tunes)
            {
                if ((keyword == null) || (keyword == "") || (t.Title.ToUpper().IndexOf(keyword.ToUpper()) != -1) || (t.AltTitle.ToUpper().IndexOf(keyword.ToUpper()) != -1))
                {
                    Console.WriteLine(t);
                }
            }
        }

        static void LoadTunes(string filename)
        {
            string[] lines = System.IO.File.ReadAllLines(filename);

            bool hasTitle = false;
            bool hasAltTitle = false;
            Tune tune = null;

            for (int i = 0; i < lines.Count(); i ++)
            {
                string line = lines[i];
                // Seach for the X: header. If we find one, its a new tune...
                if (line.IndexOf("X:") != -1)
                {
                    tune = new Tune();
                    tunes.Add(tune);
                    hasTitle = false;
                    hasAltTitle = false;
                    tune.X = int.Parse(line.Substring(2));
                }
                if (line.IndexOf("K:") != -1)
                {
                    tune.KeySig = line.Substring(2);
                }
                if (line.IndexOf("M:") != -1)
                {
                    tune.TimeSig = line.Substring(2);
                }
                if (line.IndexOf("T:") != -1)
                {
                    if (hasTitle)
                    {
                        if (!hasAltTitle)
                        {
                            tune.AltTitle = line.Substring(2);
                            hasAltTitle = true;
                        }
                    }
                    else
                    {
                        tune.Title = line.Substring(2);
                        hasTitle = true;
                    }
                }
            }
            
        }

        static void Main(string[] args)
        {
            LoadTunes("hnr1.abc");
            while (true)
            {
                Console.WriteLine("Enter a keyword or quit to quit");
                string keyword = Console.ReadLine();
                if (keyword == "quit")
                {
                    break;
                }
                PrintTunes(keyword);
            }
            Console.WriteLine("Goodbye");
            Console.ReadLine();
        }
    }
}
