/*
 * 
 *      DANI
 *      Dynamic Artificial Non-Intelligence Chatbot
 *      
 *      FEATURES:
 *      Dani can store different vocaublaries for different users and load each vocabulary when they sign in
 *      Dani uses probability to help choose the words it will reply with (may make dani look like it is copying you for a while though!)
 *      Dani only startes sentences with words that have been used at the start of a sentence previously. (may make dani look like it is copying you for a while though!)
 *      
 *      
 *      Developed by Carl MacDiarmada
 *      Student Number: C12495362
 * 
 */

using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.IO;


namespace DANI
{
    class Program
    {
        static List<Word> words = new List<Word>();
        static List<Word> firstWords = new List<Word>();
        static List<string> wordInput = new List<string>(); // Used for allowing the full class to access what words the user has entered.
        static List<string> recordDani = new List<string>(); // For recording what DANI has generated to a file if the user chooses to save
        static string user;
        static Random random = new Random();

        
        static void wordCollect(string input, bool fileOpen)
        {
            bool validCheck = true;
            int placeHolder = 0;
            int spaceCount = 0;
            char[] inputChange = new char[input.Length];
            char[] inputChars = input.ToCharArray();

            for (int i = 0; i < input.Length; i++)
            {

                if (!validCheck)
                {
                    placeHolder--;
                    validCheck = true;
                }


                if ((int)inputChars[i] >= 48 && (int)inputChars[i] <= 57) // Skips non letter/integer values  **ALSO READS IN FULL STOP AS PART OF WORD** 
                {
                    inputChange[placeHolder] = inputChars[i];
                }
                else if ((int)inputChars[i] >= 65 && (int)inputChars[i] <= 90)
                {
                    inputChars[i] = char.ToLower(inputChars[i]);
                    inputChange[placeHolder] = inputChars[i];
                }
                else if ((int)inputChars[i] >= 97 && (int)inputChars[i] <= 122)
                {
                    inputChange[placeHolder] = inputChars[i];
                }
                else if ((int)inputChars[i] == 32)
                {
                    inputChange[placeHolder] = inputChars[i];
                    spaceCount++;
                }
                else if ((int)inputChars[i] == 46)
                {
                    inputChange[placeHolder] = inputChars[i];
                }
                else
                {
                    validCheck = false;
                }

                placeHolder++;

            } // End for

            input = new string(inputChange);
            input = input.TrimEnd('\0');
            string[] words = input.Split(' ');
            wordInput = new List<string>();

            

            for (int i = 0; i < words.Length; i++) // for filling the static list of strings to store users entered words
            {
                wordInput.Add(words[i]);
                
            }
            

            if (!fileOpen)
            {
                StreamWriter file = File.AppendText(user + ".txt");

                foreach (string str in wordInput)
                {
                    
                    file.Write(str + " ");
                }
                file.WriteLine("");
                file.Close();
            }

            wordTransfer(words);


        }

        static void wordTransfer(string[] word)
        {

            for(int i = 0; i < wordInput.Count; i++)
            {
                
                if (wordInput[i] == "")
                {

                    wordInput.RemoveAt(i);
                    i--;
                       
                }

            }

            for (int i = 0; i < wordInput.Count; i++)
            {

                bool found = false;
                foreach (Word wordC in words)
                {

                    if (wordC.Words == wordInput[i])
                    {

                        /* 
                         * 
                         * Check if next word has been used before 
                         * Check if there is a next word
                         * 
                         */

                        if (i == 0 )
                        {
                            bool found1 = false;
                            foreach (Word first in firstWords)
                            {
                                if (i != wordInput.Count - 1)
                                {

                                    if (first.Words == wordC.Words)
                                    {

                                        if (wordInput.Count > 1)
                                        {
                                            foreach (NextWord next in first.NextWord)
                                            {
                                                if (next.Nextword == wordInput[i + 1])
                                                {

                                                    next.WordCount++;
                                                    found1 = true;
                                                    break;

                                                }

                                            }
                                        }

                                        if (!found1)
                                        {
                                            found1 = true;
                                            first.NextWord.Add(new NextWord(wordInput[i + 1], 1));

                                        }

                                    }
                                }
                                else
                                {
                                    foreach (NextWord next in first.NextWord)
                                    {
                                        if (next.Nextword == ".")
                                        {
                                            next.WordCount++;
                                            found1 = true;
                                            break;
                                        }

                                    }

                                    if (!found1)
                                    {

                                        first.NextWord.Add(new NextWord(".", 1));
                                        found1 = true;
                                        break;
                                    }
                                }      

                            }
                            if (!found1)
                            {
                                firstWords.Add(wordC);
                            }
                            else
                            {
                                found1 = false;

                            }

                            wordC.FirstWord = true;

                        }

                        if (i != wordInput.Count - 1)
                        {

                            foreach (NextWord next in wordC.NextWord)
                            {

                                if (next.Nextword == wordInput[i + 1])
                                {
                                    next.WordCount++;
                                    found = true;
                                    break;
                                }
                                else
                                {
                                    continue;
                                }

                                
                            }
                            if (!found)
                            {

                                wordC.NextWord.Add(new NextWord(wordInput[i + 1], 1));

                                found = true;
                                break;
                            }
                        }
                        else
                        {
                            foreach (NextWord next in wordC.NextWord)
                            {
                                if (next.Nextword == ".")
                                {
                                    next.WordCount++;
                                    found = true;
                                    break;
                                }

                            }

                            if (!found)
                            {

                                wordC.NextWord.Add(new NextWord(".", 1));
                                found = true;
                                break;
                            }
                            
                        }

                    }

                }

                if (!found)
                {

                    if (i < wordInput.Count - 1)
                    {

                        if (wordInput.Count == 1 || i == 0)
                        {
                            words.Add(new Word(wordInput[i], wordInput[i + 1], true));
                            firstWords.Add(new Word(wordInput[i], wordInput[i + 1], true)); // first word of the entered string not previously found before
                        }
                        else
                        {
                            words.Add(new Word(wordInput[i], wordInput[i + 1], false));
                        }

                    }
                    else
                    {

                        if (wordInput.Count == 1 || i == 0)
                        {
                            words.Add(new Word(wordInput[i], null, true));
                            firstWords.Add(new Word(wordInput[i], null, true));
                        }
                        else
                        {
                            words.Add(new Word(wordInput[i], null, false));
                        }

                    }

                }
                else
                {
                    break;
                }

            }

        }

        static void generateSentence()
        {
            
            
            int rNum1 = random.Next(0, 10000);
            for (int j = 0; j < rNum1; j++)
            {

            }
            int rNum = random.Next(0, wordInput.Count); // Always is 0 for some reason?

            List<Word> wordPrint = new List<Word>();

            int i = 0;
            bool numFound = false;

            List<int> numsChecked = new List<int>();
            List<Word> firstCompare = new List<Word>();

            for (i = 0; i < wordInput.Count; i++)
            {
                foreach (Word word in words)
                {
                    if (word.Words == wordInput[i] && word.FirstWord)
                    {
                        firstCompare.Add(word); // Generates a list of words from user input that can be used as a first word
                        break;
                    }

                }
            }
            rNum = random.Next(0, firstCompare.Count);

            while (wordPrint.Count == 0)
            {
                foreach (int num in numsChecked)
                {
                    if (num == rNum)
                    {
                        rNum = random.Next(0, firstCompare.Count);
                        numFound = true;
                        break;
                    }


                }

                if (numFound)
                {
                    numFound = false;
                    if (numsChecked.Count == wordInput.Count)
                    {
                        numsChecked = new List<int>();
                    }
                    continue;
                }
                else
                {
                    numsChecked.Add(rNum);
                }

                foreach (Word word in firstWords)
                {
                    if (word.Words == firstCompare[rNum].Words)
                    {
                        wordPrint.Add(word);
                        break;
                    }
                }
                rNum = random.Next(0, firstCompare.Count);
            }

           
   
            rNum1 = random.Next(0, 100000000);

            i = 0; // Set to 0 to set the index to the first word to print (to find the first nextWord to print)
            rNum = rNum1 % wordPrint[i].NextWord.Count;


            int total = 0;
            string next = "";
            bool leaveLoop = false;
            

            while(next != ".")
            {

                total = 0;
                foreach(NextWord nextw in wordPrint[i].NextWord) // Find total amount of words
                {
                    total = nextw.WordCount + total;
                }

                for (int j = 0; j < rNum1; j++ )
                {

                }
                int rand = random.Next(0,total);

                leaveLoop = false;
                int index = 0;
                if (rand > 0)
                {
                    
                    for (int j = 0; j < wordPrint[i].NextWord.Count; j++)
                    {
                        for (int k = index; k <= rand; k++)
                        {

                            if (k == wordPrint[i].NextWord[j].WordCount - 1)
                            {
                                if (k == rand)
                                {

                                    next = wordPrint[i].NextWord[j].Nextword;
                                    leaveLoop = true;
                                    break;
                                    
                                }

                                    index++;
                                    break;

                            }
                            else if (k == rand)
                            {
                                next = wordPrint[i].NextWord[j].Nextword;
                                leaveLoop = true;
                                break;
                            }
                            index = index++;
                        }

                        if(leaveLoop)
                        {
                            break;
                        }
                    }
                }
                else
                {
                    next = wordPrint[i].NextWord[0].Nextword;
                }
                
                foreach (Word word in words)
                {

                    if (word.Words == next)
                    {
                        wordPrint.Add(word);
                        i++;
                        break;
                    }
                }
                rNum1 = random.Next(0, 100000000);

                if (wordPrint.Count > 6)
                {
                    int counter = 0;
                    for (int j = 0; j < wordPrint.Count - 2; j++)
                    {
                        if (wordPrint[j] == wordPrint[j + 2])
                        {
                            counter++;
                        }

                        if (counter > 1)
                        {
                            next = wordPrint[i].NextWord[random.Next(0, random.Next(0, wordPrint[i].NextWord.Count))].Nextword; // To prevent constant word repeating
                            break;
                        }
                    }
                }

            }

            
            
            for (i = 0; i < wordPrint.Count; i++)
            {

                if (i == wordPrint.Count - 1)
                {
                    Console.Write(wordPrint[i].Words + ".\n\n");
                    recordDani.Add(wordPrint[i].Words + ".\n");
                    
                }
                else
                {
                    Console.Write(wordPrint[i].Words + " ");
                    recordDani.Add(wordPrint[i].Words + " ");
                }

            }
                


        }


        static void Main(string[] args)
        {
            bool found = false;
            while(true)
            {
                Console.Clear();
                Console.Write("Greetings, what is your name: ");
                user = Console.ReadLine();

                if (user != "") 
                {
                    string[] users = File.ReadAllLines("users.txt"); // Allows users to have an account with DANI, DANI will have a different vocabulary depending on the user
                    foreach (string name in users)
                    {
                        if (name == user)
                        {
                            found = true;
                            break;
                        }
                    }

                    string menuChoice;
    
                    if (!found)
                    {
                        StreamWriter usersFile = File.AppendText("users.txt");
                        usersFile.WriteLine(user);
                        usersFile.Close();
                        File.Create(user + ".txt").Dispose();

                    }
                    else
                    {
                        while (true)
                        {
                            Console.Clear();
                            Console.WriteLine("Would you like to load vocabulary from previous conversations? [yes/no]");

                            menuChoice = Console.ReadLine();

                            if (menuChoice.ToLower() == "yes")
                            {
                                string[] lines = File.ReadAllLines(user + ".txt");
                                foreach (string str in lines)
                                {
                                    wordCollect(str, true);
                                }
                                break;
                            }
                            else if (menuChoice.ToLower() == "no")
                            {
                                break;
                            }
                            else
                            {
                                Console.Clear();
                                Console.WriteLine("Error:");
                                Console.WriteLine("Invalid Entry: Press any key to try again");
                                Console.ReadKey();
                            }
                        }
                    }

                    bool dontSave = false;
                    while (true)
                    {
                        Console.Clear();
                        Console.WriteLine("Would you like this conversation to be saved? [yes/no]");

                        menuChoice = Console.ReadLine();

                        if (menuChoice.ToLower() == "yes")
                        {
                            dontSave = true;
                            break;
                        }
                        else if (menuChoice.ToLower() == "no")
                        {
                            break;
                        }
                        else
                        {
                            Console.Clear();
                            Console.WriteLine("Error:");
                            Console.WriteLine("Invalid Entry: Press any key to try again");
                            Console.ReadKey();
                        }
                    }


                    while (true) // To repeat the menu until the user chooses to exit the program
                    {

                        Console.Clear();

                        Console.WriteLine("\t\tWelcome to DANI");
                        Console.WriteLine("");
                        Console.WriteLine("Please choose an option from the list below:");
                        Console.WriteLine("");
                        Console.WriteLine("[1] Begin a conversation");
                        Console.WriteLine("[2] Exit");

                        menuChoice = Console.ReadLine();

                        if (menuChoice == "1") // Start Conversation
                        {

                            Console.Clear();
                            string input = "";

                            while (true)
                            {

                                Console.WriteLine("User:");
                                input = Console.ReadLine();

                                if (input != "")
                                {
                                    if (dontSave)
                                    {
                                        wordCollect(input, true);
                                    }
                                    else
                                    {
                                        wordCollect(input, false);
                                    }
                                    Console.WriteLine("\nDANI:");

                                    if (input == "BYE DANI") // User exiting conversation
                                    {

                                        break;

                                    }

                                    generateSentence();

                                }
                                else
                                {

                                    Console.Clear();
                                    Console.WriteLine("Please enter text: Press any key to try again");
                                    Console.ReadKey();
                                    Console.Clear();

                                }

                            }

                        }
                        else if (menuChoice == "2") // Leave program
                        {

                            Environment.Exit(0);

                        }
                        else
                        {

                            Console.Clear();
                            Console.WriteLine("Error:");
                            Console.WriteLine("Invalid Entry: Press any key to try again");
                            Console.ReadKey();

                        }

                    }

                }
                else
                {
                    Console.Clear();
                    Console.WriteLine("Error:");
                    Console.WriteLine("Invalid Entry: Press any key to try again");
                    Console.ReadKey();
                }

            }

        }

    }

}
