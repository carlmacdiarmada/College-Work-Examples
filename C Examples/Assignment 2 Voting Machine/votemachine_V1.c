// Title: Voting Program
// Description: User can choose to vote and select 3 applicants. The winner of the election is then calculated after 10 votes.
// Author : Carl McDermott
// Created: 28/10/12
// Last Updated: 28/10/12
#include <stdio.h>
#define VOTEAMOUNT 3

main()
{
    int menuChoice;
    int menuRepeat = 0;
    int quitChoice;
    int userVote[VOTEAMOUNT];
    int mikeVoteCount = 0;
    int billVoteCount = 0;
    int bobVoteCount = 0;
    int danVoteCount = 0;
    
    do
    {
        printf("Please choose an option from the list below:\n\n");
        printf("[1] Make a vote.\n[2] Exit Program\n\nPlease make a choice: ");
        scanf("%d",&menuChoice);
        
        if(menuChoice == 1) // If the user chooses to vote
        {
            printf("\n\nThank you for choosing to vote!\n");
            printf("Here are this years candidates: \n\n");
            printf("[1] Mike\n[2] Bill\n[3] Bob\n[4] Dan\n\n");
            
            for(int i = 0; i < VOTEAMOUNT; i++) // Takes user vote and adds to an array ( userVote[] )
            {
                printf("\nPlease make selection number %d: ",i + 1);
                scanf("%d",&userVote[i]);
                
                switch(userVote[i])
                {
                    case 1:
                    {
                        printf("\nVote number %d - Mike\n", i + 1);
                        mikeVoteCount++;
                        break;
                    }
                    case 2:
                    {
                        printf("\nVote number %d - Bill\n", i + 1);
                        billVoteCount++;
                        break;
                    }
                    case 3: 
                    {
                        printf("\nVote number %d - Bob\n", i + 1);
                        bobVoteCount++;
                        break;
                    }
                    case 4:
                    {
                        printf("\nVote number %d - Dan\n", i + 1);
                        danVoteCount++;
                        break;
                    }
                    default:
                    {
                        printf("\nInvalid Vote: Please choose a candidate from the list above.\n");
                        i--;
                        break;
                    }
                    
                }
                
            } // End for loop
            
            printf("\nHere are the votes so far:\n");
            printf("Mike - %d\nBill - %d\nBob - %d\nDan - %d\n",mikeVoteCount,billVoteCount,bobVoteCount,danVoteCount);
            // ** Use two arrays instead of code above - An array for candidates names + an array for their vote counts **
            
            
        } // End if
        else if(menuChoice == 2) // If the user chooses to quit
        {
            printf("\nAre you sure you want to quit? [Y/N]\n");
            scanf("%1s",&quitChoice);
            flushall();
            
            if(quitChoice == 'y' || quitChoice == 'Y')
            {
                return 0;
            }
            else if(quitChoice == 'n' || quitChoice == 'N')
            {
                menuRepeat = 1;
            }
            else
            {
                printf("\nInvalid Selection: Please try again.");
                menuRepeat = 1;
            }
            
        } // End else if
        else // If the user makes an invalid selection
        {
            printf("\n\nInvalid Entry: Please try again\n\n");
            menuRepeat = 1;
        }
        
    } // End do
    while(menuRepeat == 1);
        
    getchar();
    getchar();
}