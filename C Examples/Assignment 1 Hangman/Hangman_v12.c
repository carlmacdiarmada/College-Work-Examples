//
// Title: Hangman Game
//
// Description: Chooses a random word from a predetermined list and  the user guesses letters until they guess every letter of the word
//                    If the user guesses an incorrect letter, they lose a life. The game ends once the user has lost their lifes or they have guessed
//                    every letter of the word.
//
// Author: Carl McDermott
//
// Last updated: 12/11/12
//

#include <stdio.h>
#include <stdlib.h>

// LENGHT1 - LENGTH5 are the lengths of the arrays of the words below.
#define LIVES 6
#define LENGTH1 9
#define LENGTH2 8
#define LENGTH3 8
#define LENGTH4 11
#define LENGTH5 7
#define USEDSIZE 26

int hangmanArt(int lives) // Draws the pictures for the hangman
{
    switch(lives) // Draws the hangman depending on how many lives are left
    {
        case 6:
        {
            printf("\n");
            printf("      +---+\n");
            printf("      |   |\n");
            printf("          |\n");
            printf("          |\n");
            printf("          |\n");
            printf("          |\n");
            printf("    =========\n\n");
            break;
        }
        case 5:
        {
            printf("\n");
            printf("      +---+\n");
            printf("      |   |\n");
            printf("      O   |\n");
            printf("          |\n");
            printf("          |\n");
            printf("          |\n");
            printf("    =========\n\n");
            break;
        }
        case 4:
        {
            printf("\n");
            printf("      +---+\n");
            printf("      |   |\n");
            printf("      O   |\n");
            printf("      |   |\n");
            printf("          |\n");
            printf("          |\n");
            printf("    =========\n\n");
            break;
        }
        case 3:
        {
            printf("\n");
            printf("      +---+\n");
            printf("      |   |\n");
            printf("      O   |\n");
            printf("     /|   |\n");
            printf("          |\n");
            printf("          |\n");
            printf("    =========\n\n");
            break;
        }
        case 2:
        {
            printf("\n");
            printf("      +---+\n");
            printf("      |   |\n");
            printf("      O   |\n");
            printf("     /|\\  |\n");
            printf("          |\n");
            printf("          |\n");
            printf("    =========\n\n");
            break;
        }
        case 1:
        {
            printf("\n");
            printf("      +---+\n");
            printf("      |   |\n");
            printf("      O   |\n");
            printf("     /|\\  |\n");
            printf("     /    |\n");
            printf("          |\n");
            printf("    =========\n\n");
            break;
        }
        
    } // End switch(lives)
    
    return 1;
}

void interface(int lives,int wordLength, char *wordOut, char *usedLetters) // Shows the interface when the user plays the game
{
    printf("Lives: %d\n", lives); // Prints the lives
    printf("Word to guess: ");
    for(int i = 0; i < wordLength; i++) // Prints the word to guess
    {
        if(i != wordLength - 1)
        {
            printf("%c", *(wordOut + i) );
            printf(",");
        } // End if
        else
        {
            printf("%c\n", *(wordOut + i) );
        } // End else

    } // End for loop
    
    printf("Used Letters: ");
    for(int i = 0; i < USEDSIZE; i++) // Prints the letters used
    {
        if( *(usedLetters + i) == ' ')
        {
            break;
        }
        else if(i != USEDSIZE - 1)
        {
            printf("%c", *(usedLetters + i) );
            printf(",");
        }
        else
        {
            printf("%c\n", *(usedLetters + i) );
        }
    }
}

char letterConvert(char letterGuess) // Converts capital letters to lowercase letters
{
    if(letterGuess > 64 && letterGuess < 91)
    {
        letterGuess = letterGuess + 32;
        return letterGuess;
    }
    else
    {
        return letterGuess;
    }
}

int validGuess(char letterGuess) // Checks if the letter guessed is valid (a-z or 1-9)
{
    if(letterGuess > 96 && letterGuess < 123 || letterGuess > 47 && letterGuess < 58)
    {
        return 1; // User has entered a valid guess
    }
    else
    {
        system("cls");
        printf("Invalid Entry: Please enter a guess from A-Z or 0-9\n\n");
        return 0; // User has entered an invalid guess
    }
}

int usedLetterCheck(char *usedLetters,char *letterGuess, int *totalGuesses) // Checks if the letter is used before, if not, adds it to the array of used letters
{
    for(int i = 0; i < USEDSIZE; i++)
    {
        if( *(usedLetters + i) == ' ') // If letter is not used before
        {
            printf("\n\n");
            
            *(usedLetters + i) = *letterGuess;
            *totalGuesses = *totalGuesses + 1;
            return 1;
        } // End if
        else if( *(usedLetters + i) == *letterGuess) // If letter is used before
        {
            printf("This letter has been used before!\n\n");
            return 0;
        } // End else if
        
    } // End for loop
}

int wordArrayCheck(char *wordList , char *wordOut , char *letterGuess , int wordLength, int *lives) // Checks if the letter is in the array
{
    int total = 0;
    for(int i = 0; i < wordLength; i++)
    {
        if( *(wordList + i) == *(letterGuess)) // If it is in the array
        {
            *(wordOut + i) = *letterGuess;
            total = total + 1;
        }
        
    } // End for loop
    
    if(total > 0)
    {
        system("cls");
        printf("Correct!\n\n");
        return 1;
    }
    else
    {
        system("cls");
        printf("Incorrect: You lose a life!\n\n");
        *lives = *lives - 1;
        return 0;
    }
}


int allLettersGuessedCheck(char *wordList, char *wordOut, int wordLength) // Checks if every letter in the array has been guessed
{
    int total = 0;
    int i;
    
    for(i = 0; i < wordLength; i++)
    {
        if( *(wordList + i) == *(wordOut + i) )
        {
            total = total + 1;
        }
    }
    
    if(total == wordLength)
    {
        return 1;
    }
    else
    {
        return 0;
    }
}

void gameWonScreen(char *wordList, int lives,int totalGuesses, int wordLength) // Screen Shown when user guesses every letter right
{
    system("cls");
    printf("Congratulations!\nYou have guessed every letter correctly!\n");
    printf("\nThe word was: ");
    for(int i = 0; i < wordLength; i++)
    {
        printf("%c",*(wordList + i) );
    }
    printf("\nLives Lost: %d",LIVES - lives);
    printf("\nLives Left: %d",lives);
    printf("\nGuesses Taken: %d\n\n",totalGuesses);
}
void gameLostScreen() // Screen shown when user loses all lives
{
    system("cls");
    printf("\n\n\n");
    printf("      +---+\n");
    printf("      |   |\n");
    printf("      O   |\n");
    printf("     /|\\  |\n");
    printf("     / \\  |\n");
    printf("          |\n");
    printf("    =========\n\n");
    printf("GAME OVER\n\nYou have lost all of your lives!\n");
}



int quitCheck(char x) // Checks if the user is sure they want to quit
{
    if(x == 'y' || x == 'Y')
    {
        return 0; // 0 = Quit
    }
    else if(x == 'n' || x == 'N')
    {
        return 1; // 1 = Repeat
    }
    else
    {
        system("cls");
        printf("Invalid Selection:\nPlease try again and press 'Y' or 'N'.\n\n");
        return 2; // 2 = Invalid
    }
}


main()
{
    // List of words for the program to choose from with an array for the displayed output of the word.
    char wordList1[LENGTH1] = {'c','h','a','r','a','c','t','e','r'};

    char wordList2[LENGTH2] = {'e','l','e','p','h','a','n','t'};

    char wordList3[LENGTH3] = {'r','a','d','i','a','t','o','r'};

    char wordList4[LENGTH4] = {'i','n','t','e','l','l','i','g','e','n','t'};

    char wordList5[LENGTH5] = {'o','c','t','o','b','e','r'};
    
    int i;
    
    char menuChoice, menuQuit, playAgain, playAgainRepeat, letterGuess;
    int menuRepeat, menuQuitRepeat, menuQuitCheck, playAgainCheck;
    
    int lives, totalGuesses, wordChoice, roundFinished; 
    int validGuessCheck, inArrayCheck, usedBefore, allLettersGuessed;
    
    do // Runs the game at least once before repeating if the user chooses to repeat
    {
        system("cls");
        printf("HANGMAN\n");
        printf("\nPlease choose an option:");
        printf("\n[1] Play Game.\n[2] Instructions.\n[3] Quit Game.\n");
        printf(" -> ");
        
        
        scanf("%c",&menuChoice); // Scans the number the user enters as a character and converts it to it's ASCII value (program wouldn't read the integers properly + flushall(); wouldn't worlk)
                                 // Can show the problem in the programming lab.
        
        switch(menuChoice)
        {
            case '1':
            {
                // Choose a random number between 1 and 5 to choose which word above will be chosen
                srand((unsigned)time( NULL )); // Used srand() because rand was just returing 1 every time the program was run.
                wordChoice = rand()%5 + 1;
                
                system("cls");
                lives = 6;
                totalGuesses = 0;
                roundFinished = 0;
                
                switch(wordChoice)
                {
                    case 1:
                    {
                        
                        char wordOut1[LENGTH1];
                        for(i = 0; i < LENGTH1; i++)
                        {
                            wordOut1[i] = '_';
                        }
                        
                        char usedLetters[USEDSIZE];
                        for(i = 0; i < USEDSIZE; i++)
                        {
                            usedLetters[i] = ' ';
                        }
                        
                        printf("\n\n");
                        
                        while(lives != 0 && roundFinished != 1)
                        {
                            
                            hangmanArt(lives); // Shows the hangman picture
                            
                            interface(lives,LENGTH1,&wordOut1[0],&usedLetters[0]); // Shows the hangman in-game interface
                            
                            printf("\nGuess a letter!\n\n");
                            printf("-> "); // User makes first guess
                            
                            scanf("%1s", &letterGuess);
                            letterGuess = letterConvert(letterGuess); // Converts capital letters to lowercase
                            validGuessCheck = validGuess(letterGuess); // Checks if the input is valid ( a-z or 0-9 ) 
                            
                            if(validGuessCheck == 1)
                            {
                                system("cls");
                                usedBefore = usedLetterCheck(&usedLetters[0],&letterGuess,&totalGuesses); // Is input used before?
                                
                                if(usedBefore == 1)
                                {
                                    inArrayCheck = wordArrayCheck(&wordList1[0],&wordOut1[0],&letterGuess,LENGTH1, &lives); // Is input in the array?
                                    
                                    if(inArrayCheck == 1)
                                    {
                                        allLettersGuessed = allLettersGuessedCheck(&wordList1[0],&wordOut1[0],LENGTH1); // Is every letter guessed?
                                        
                                        if(allLettersGuessed == 1)
                                        {
                                            gameWonScreen(&wordList1[0], lives, totalGuesses, LENGTH1); // Show the screen because the user won
                                            
                                            do // Asks user if they want to play again, repeats if they enter an invalid character
                                            {
                                                printf("Do you want to play again? [Y/N]\n->");
                                                scanf("%1s",&playAgain);
                                                
                                                playAgainCheck = quitCheck(playAgain);
                                                if(playAgainCheck == 0)
                                                {
                                                    roundFinished = 1;
                                                    playAgainRepeat = 0;
                                                    menuRepeat = 1;
                                                }
                                                else if(playAgainCheck == 1)
                                                {
                                                    return 0;
                                                }
                                                else
                                                {
                                                    playAgainRepeat = 1;
                                                }
                                                
                                            }
                                            while(playAgainRepeat == 1);
                                            
                                        } // End if(allLettersGuessed == 1)
                                        
                                    } // End if(inArrayCheck == 1)
                                    
                                } // End if(usedBefore == 1)
                                
                            } // End if(validGuessCheck == 1)
                            
                        } // End while(lives != 0)
                            
                        if(lives == 0)
                        {
                            gameLostScreen();
                            
                            do // Asks user if they want to quit, repeats if they enter an invalid character
                            {
                                printf("Do you want to play again? [Y/N]\n->");
                                scanf("%1s",&playAgain);
                                
                                playAgainCheck = quitCheck(playAgain);
                                if(playAgainCheck == 0)
                                {
                                    playAgainRepeat = 0;
                                    menuRepeat = 1;
                                }
                                else if(playAgainCheck == 1)
                                {
                                    return 0;
                                }
                                else
                                {
                                    playAgainRepeat = 1;
                                }
                                
                            }
                            while(playAgainRepeat == 1);
                        }
                            
                        break;
                            
                    } // End case 1
                    case 2:
                    {
                        char wordOut2[LENGTH2];
                        for(i = 0; i < LENGTH2; i++)
                        {
                            wordOut2[i] = '_';
                        }
                        
                        char usedLetters[USEDSIZE];
                        for(i = 0; i < USEDSIZE; i++)
                        {
                            usedLetters[i] = ' ';
                        }
                        
                        printf("\n\n");
                        
                        while(lives != 0 && roundFinished != 1)
                        {
                            
                            hangmanArt(lives); // Shows the hangman picture
                            
                            interface(lives,LENGTH2,&wordOut2[0],&usedLetters[0]); // Shows the hangman in-game interface
                            
                            printf("\nGuess a letter!\n\n");
                            printf("-> "); // User makes first guess
                            
                            scanf("%1s", &letterGuess);
                            letterGuess = letterConvert(letterGuess); // Converts capital letters to lowercase
                            validGuessCheck = validGuess(letterGuess); // Checks if the input is valid ( a-z or 0-9 )
                            
                            if(validGuessCheck == 1)
                            {
                                system("cls");
                                usedBefore = usedLetterCheck(&usedLetters[0],&letterGuess,&totalGuesses); // Is input used before?
                                
                                if(usedBefore == 1)
                                {
                                    inArrayCheck = wordArrayCheck(&wordList2[0],&wordOut2[0],&letterGuess,LENGTH2, &lives); // Is input in the array?
                                    
                                    if(inArrayCheck == 1)
                                    {
                                        allLettersGuessed = allLettersGuessedCheck(&wordList2[0],&wordOut2[0],LENGTH2); // Is every letter guessed?
                                        
                                        if(allLettersGuessed == 1)
                                        {
                                            gameWonScreen(&wordList2[0], lives, totalGuesses, LENGTH2); // Show the screen because the user won
                                            
                                            do // Asks user if they want to play again, repeats if they enter an invalid character
                                            {
                                                printf("Do you want to play again? [Y/N]\n->");
                                                scanf("%1s",&playAgain);
                                                
                                                playAgainCheck = quitCheck(playAgain);
                                                if(playAgainCheck == 0)
                                                {
                                                    roundFinished = 1;
                                                    playAgainRepeat = 0;
                                                    menuRepeat = 1;
                                                }
                                                else if(playAgainCheck == 1)
                                                {
                                                    return 0;
                                                }
                                                else
                                                {
                                                    playAgainRepeat = 1;
                                                }
                                                
                                            }
                                            while(playAgainRepeat == 1);
                                            
                                        } // End if(allLettersGuessed == 1)
                                        
                                    } // End if(inArrayCheck == 1)
                                    
                                } // End if(usedBefore == 1)
                                
                            } // End if(validGuessCheck == 1)
                            
                        } // End while(lives != 0)
                            
                        if(lives == 0)
                        {
                            gameLostScreen();
                            
                            do // Asks user if they want to quit, repeats if they enter an invalid character
                            {
                                printf("Do you want to play again? [Y/N]\n->");
                                scanf("%1s",&playAgain);
                                
                                playAgainCheck = quitCheck(playAgain);
                                if(playAgainCheck == 0)
                                {
                                    playAgainRepeat = 0;
                                    menuRepeat = 1;
                                }
                                else if(playAgainCheck == 1)
                                {
                                    return 0;
                                }
                                else
                                {
                                    playAgainRepeat = 1;
                                }
                                
                            }
                            while(playAgainRepeat == 1);
                        }
                            
                        break;
                            
                    } // End case 2
                    case 3:
                    {
                        char wordOut3[LENGTH3];
                        for(i = 0; i < LENGTH3; i++)
                        {
                            wordOut3[i] = '_';
                        }
                        
                        char usedLetters[USEDSIZE];
                        for(i = 0; i < USEDSIZE; i++)
                        {
                            usedLetters[i] = ' ';
                        }
                        
                        printf("\n\n");
                        
                        while(lives != 0 && roundFinished != 1)
                        {
                            
                            hangmanArt(lives); // Shows the hangman picture
                            
                            interface(lives,LENGTH3,&wordOut3[0],&usedLetters[0]); // Shows the hangman in-game interface
                            
                            printf("\nGuess a letter!\n\n");
                            printf("-> "); // User makes first guess
                            
                            scanf("%1s", &letterGuess);
                            letterGuess = letterConvert(letterGuess); // Converts capital letters to lowercase
                            validGuessCheck = validGuess(letterGuess); // Checks if the input is valid ( a-z or 0-9 )
                            
                            if(validGuessCheck == 1)
                            {
                                system("cls");
                                usedBefore = usedLetterCheck(&usedLetters[0],&letterGuess,&totalGuesses); // Is input used before?
                                
                                if(usedBefore == 1)
                                {
                                    inArrayCheck = wordArrayCheck(&wordList3[0],&wordOut3[0],&letterGuess,LENGTH3, &lives); // Is input in the array?
                                    
                                    if(inArrayCheck == 1)
                                    {
                                        allLettersGuessed = allLettersGuessedCheck(&wordList3[0],&wordOut3[0],LENGTH3); // Is every letter guessed?
                                        
                                        if(allLettersGuessed == 1)
                                        {
                                            gameWonScreen(&wordList3[0], lives, totalGuesses, LENGTH3); // Show the screen because the user won
                                            
                                            do // Asks user if they want to play again, repeats if they enter an invalid character
                                            {
                                                printf("Do you want to play again? [Y/N]\n->");
                                                scanf("%1s",&playAgain);
                                                
                                                playAgainCheck = quitCheck(playAgain);
                                                if(playAgainCheck == 0)
                                                {
                                                    roundFinished = 1;
                                                    playAgainRepeat = 0;
                                                    menuRepeat = 1;
                                                }
                                                else if(playAgainCheck == 1)
                                                {
                                                    return 0;
                                                }
                                                else
                                                {
                                                    playAgainRepeat = 1;
                                                }
                                                
                                            }
                                            while(playAgainRepeat == 1);
                                            
                                        } // End if(allLettersGuessed == 1)
                                        
                                    } // End if(inArrayCheck == 1)
                                    
                                } // End if(usedBefore == 1)
                                
                            } // End if(validGuessCheck == 1)
                            
                        } // End while(lives != 0)
                            
                        if(lives == 0)
                        {
                            gameLostScreen();
                            
                            do // Asks user if they want to quit, repeats if they enter an invalid character
                            {
                                printf("Do you want to play again? [Y/N]\n->");
                                scanf("%1s",&playAgain);
                                
                                playAgainCheck = quitCheck(playAgain);
                                if(playAgainCheck == 0)
                                {
                                    playAgainRepeat = 0;
                                    menuRepeat = 1;
                                }
                                else if(playAgainCheck == 1)
                                {
                                    return 0;
                                }
                                else
                                {
                                    playAgainRepeat = 1;
                                }
                                
                            }
                            while(playAgainRepeat == 1);
                        }
                            
                        break;
                            
                    } // End case 3
                    case 4:
                    {

                        char wordOut4[LENGTH4];
                        for(i = 0; i < LENGTH4; i++)
                        {
                            wordOut4[i] = '_';
                        }
                        
                        char usedLetters[USEDSIZE];
                        for(i = 0; i < USEDSIZE; i++)
                        {
                            usedLetters[i] = ' ';
                        }
                        
                        printf("\n\n");
                        
                        while(lives != 0 && roundFinished != 1)
                        {
                            
                            hangmanArt(lives); // Shows the hangman picture
                            
                            interface(lives,LENGTH4,&wordOut4[0],&usedLetters[0]); // Shows the hangman in-game interface
                            
                            printf("\nGuess a letter!\n\n");
                            printf("-> "); // User makes first guess
                            
                            scanf("%1s", &letterGuess);
                            letterGuess = letterConvert(letterGuess); // Converts capital letters to lowercase
                            validGuessCheck = validGuess(letterGuess); // Checks if the input is valid ( a-z or 0-9 )
                            
                            if(validGuessCheck == 1)
                            {
                                system("cls");
                                usedBefore = usedLetterCheck(&usedLetters[0],&letterGuess,&totalGuesses); // Is input used before?
                                
                                if(usedBefore == 1)
                                {
                                    inArrayCheck = wordArrayCheck(&wordList4[0],&wordOut4[0],&letterGuess,LENGTH4, &lives); // Is input in the array?
                                    
                                    if(inArrayCheck == 1)
                                    {
                                        allLettersGuessed = allLettersGuessedCheck(&wordList4[0],&wordOut4[0],LENGTH4); // Is every letter guessed?
                                        
                                        if(allLettersGuessed == 1)
                                        {
                                            gameWonScreen(&wordList4[0], lives, totalGuesses, LENGTH4); // Show the screen because the user won
                                            
                                            do // Asks user if they want to play again, repeats if they enter an invalid character
                                            {
                                                printf("Do you want to play again? [Y/N]\n->");
                                                scanf("%1s",&playAgain);
                                                
                                                playAgainCheck = quitCheck(playAgain);
                                                if(playAgainCheck == 0)
                                                {
                                                    roundFinished = 1;
                                                    playAgainRepeat = 0;
                                                    menuRepeat = 1;
                                                }
                                                else if(playAgainCheck == 1)
                                                {
                                                    return 0;
                                                }
                                                else
                                                {
                                                    playAgainRepeat = 1;
                                                }
                                                
                                            }
                                            while(playAgainRepeat == 1);
                                            
                                        } // End if(allLettersGuessed == 1)
                                        
                                    } // End if(inArrayCheck == 1)
                                    
                                } // End if(usedBefore == 1)
                                
                            } // End if(validGuessCheck == 1)
                            
                        } // End while(lives != 0)
                            
                        if(lives == 0)
                        {
                            gameLostScreen();
                            
                            do // Asks user if they want to quit, repeats if they enter an invalid character
                            {
                                printf("Do you want to play again? [Y/N]\n->");
                                scanf("%1s",&playAgain);
                                
                                playAgainCheck = quitCheck(playAgain);
                                if(playAgainCheck == 0)
                                {
                                    playAgainRepeat = 0;
                                    menuRepeat = 1;
                                }
                                else if(playAgainCheck == 1)
                                {
                                    return 0;
                                }
                                else
                                {
                                    playAgainRepeat = 1;
                                }
                                
                            }
                            while(playAgainRepeat == 1);
                        }
                            
                        break;
                            
                    } // End case 4
                    case 5:
                    {
                        char wordOut5[LENGTH5];
                        for(i = 0; i < LENGTH5; i++)
                        {
                            wordOut5[i] = '_';
                        }
                        
                        char usedLetters[USEDSIZE];
                        for(i = 0; i < USEDSIZE; i++)
                        {
                            usedLetters[i] = ' ';
                        }
                        
                        printf("\n\n");
                        
                        while(lives != 0 && roundFinished != 1)
                        {
                            
                            hangmanArt(lives); // Shows the hangman picture
                            
                            interface(lives,LENGTH5,&wordOut5[0],&usedLetters[0]); // Shows the hangman in-game interface
                            
                            printf("\nGuess a letter!\n\n");
                            printf("-> "); // User makes first guess
                            
                            scanf("%1s", &letterGuess);
                            letterGuess = letterConvert(letterGuess); // Converts capital letters to lowercase
                            validGuessCheck = validGuess(letterGuess); // Checks if the input is valid ( a-z or 0-9 )
                            
                            if(validGuessCheck == 1)
                            {
                                system("cls");
                                usedBefore = usedLetterCheck(&usedLetters[0],&letterGuess,&totalGuesses); // Is input used before?
                                
                                if(usedBefore == 1)
                                {
                                    inArrayCheck = wordArrayCheck(&wordList5[0],&wordOut5[0],&letterGuess,LENGTH5, &lives); // Is input in the array?
                                    
                                    if(inArrayCheck == 1)
                                    {
                                        allLettersGuessed = allLettersGuessedCheck(&wordList5[0],&wordOut5[0],LENGTH5); // Is every letter guessed?
                                        
                                        if(allLettersGuessed == 1)
                                        {
                                            gameWonScreen(&wordList5[0], lives, totalGuesses, LENGTH5); // Show the screen because the user won
                                            
                                            do // Asks user if they want to play again, repeats if they enter an invalid character
                                            {
                                                printf("Do you want to play again? [Y/N]\n->");
                                                scanf("%1s",&playAgain);
                                                
                                                playAgainCheck = quitCheck(playAgain);
                                                if(playAgainCheck == 0)
                                                {
                                                    roundFinished = 1;
                                                    playAgainRepeat = 0;
                                                    menuRepeat = 1;
                                                }
                                                else if(playAgainCheck == 1)
                                                {
                                                    return 0;
                                                }
                                                else
                                                {
                                                    playAgainRepeat = 1;
                                                }
                                                
                                            }
                                            while(playAgainRepeat == 1);
                                            
                                        } // End if(allLettersGuessed == 1)
                                        
                                    } // End if(inArrayCheck == 1)
                                    
                                } // End if(usedBefore == 1)
                                
                            } // End if(validGuessCheck == 1)
                            
                        } // End while(lives != 0)
                            
                        if(lives == 0)
                        {
                            gameLostScreen();
                            
                            do // Asks user if they want to quit, repeats if they enter an invalid character
                            {
                                printf("Do you want to play again? [Y/N]\n->");
                                scanf("%1s",&playAgain);
                                
                                playAgainCheck = quitCheck(playAgain);
                                if(playAgainCheck == 0)
                                {
                                    playAgainRepeat = 0;
                                    menuRepeat = 1;
                                }
                                else if(playAgainCheck == 1)
                                {
                                    return 0;
                                }
                                else
                                {
                                    playAgainRepeat = 1;
                                }
                                
                            }
                            while(playAgainRepeat == 1);
                        }
                            
                        break;
                            
                    } // End case 5
                } // End switch(wordChoice)
                
                break;
            } // End case '1'
            case '2':
            {
                system("cls");
                
                printf("\nINSTRUCTIONS:\n\n");
                printf("[1] You will be presented with a word to guess, shown with underscores:\n");
                printf("( eg. _,_,_,_,_,_ )\n\n");
                printf("[2] You have %d lives at the beginning of the round and can guess the letters of the word.\n\n",LIVES);
                printf("[3] For each incorrect guess you make you will lose a life.\n\n");
                printf("[4] The game ends when you run out of lives or you correctly guess every letter of the word.");
                printf("\n\nPress Enter to continue: ");
                   
                getchar();
                
                menuRepeat = 1;
                break;
            }
            case '3':
            {
                system("cls");
                do // Asks user if they want to quit, repeats if they enter an invalid character
                {
                    printf("Are you sure you want to quit? [Y/N]\n->");
                    scanf("%1s",&menuQuit);
                    
                    menuQuitCheck = quitCheck(menuQuit);
                    if(menuQuitCheck == 1)
                    {
                        menuQuitRepeat = 0;
                    }
                    else if(menuQuitCheck == 0)
                    {
                        return 0;
                    }
                    else
                    {
                        menuQuitRepeat = 1;
                    }
                    
                }
                while(menuQuitRepeat == 1);
                    
                menuRepeat = 1;
                break;
            }
            default:
            {
                printf("Invalid Statement: Press enter to try again.");
                menuRepeat = 1;
                getchar();
                getchar();
            }
        }// End switch menu choice
    }
    while(menuRepeat == 1); // End do while
        
}// End main