
Conversație deschisă. Un mesaj citit.

Treci la conținut
Se folosește Gmail cu cititoare de ecran
Caută


#include <stdio.h>

Gmail
SCRIE
Etichete
Mesaje primite (29)
Cu stea
Mesaje trimise
Mesaje nefinalizate (2)
Mai multe
Hangouts




Mută în Mesaje primite Mai multe
1 din 10

Printează-le pe toate Într-o fereastră nouă
(fără subiect)
Mesaje primite
x

Viorel Raileanu <raviorel1989@gmail.com>
19.02.2016

către mine
#include <stdio.h>
#include <stdlib.h>
#include <string.h>
#include <stdbool.h>
#include <time.h>
#include <sys\time.h>
#include <conio.h>
/* run this program using the console pauser or add your own getch, system("pause") or input loop */
int gameTable[99][99];
int gameTlength=8;
int max=2048;

int randomize();
bool antilWin();
void getRandom();
void PrintScreen();
void toLeft();
void toRight();
void toTop();
void toBottom();
void presKey();

int main(int argc, char *argv[]) {

getRandom();
getRandom();
PrintScreen();
do{
	presKey();


}while(antilWin());

	return 0;
}
//////////////////// Function Randomize //////////////////////////////////////////////
int randomize (int min, int max){
struct timeval systime;

gettimeofday(&systime,NULL);
return min+systime.tv_usec%(max-min+1);
}
////////////////////// Funciont PrinScreen /////////////////////////////////////
void PrintScreen(){
	system("cls");
int i=0,j=0,x=0,y=0;

	for (i=-1;i<gameTlength*7;i++)
		printf("_");

	for (i=0;i<gameTlength;i++){
	 	printf("\n");
	 	for(y=0;y<gameTlength;y++)printf("      |");
	 	printf("\n");
		for (j=0;j<gameTlength;j++){
			if(gameTable[i][j]==0){
				printf("      |");
			}else if (gameTable[i][j]>999){
				printf(" %i |", gameTable[i][j]);
			}else if (gameTable[i][j]>99){
				printf("  %i |", gameTable[i][j]);
			}else if (gameTable[i][j]>9){
				printf("  %i  |", gameTable[i][j]);
			}else{
				printf("   %i  |", gameTable[i][j]);
			}
		}
		printf("\n");
	 	for(y=0;y<gameTlength;y++)printf("      |");
		printf("\n");
		for(y=0;y<gameTlength*7;y++)printf("-");
	}
		printf("\n");
		printf("\n");
}
/////////////////////////// Function getRandom///////////////////////////////////

void getRandom(){
	//srand(time(NULL));
	int val=2;
	int x=randomize(0,gameTlength-1);
	clock_t sysclock;
	sysclock=clock()+0,002*CLOCKS_PER_SEC;
	while(clock()<sysclock){
	}
	int y=randomize(0,gameTlength-1);
	if (gameTable[x][y]!=0){
	getRandom();
	}else gameTable[x][y]=val;

	}
//////////////////////// Function toRight ///////////////////////////
void toRight(){
	int i=0,j=0,x=0;

for(i=0;i<gameTlength;i++){
	for (j=gameTlength-1;j>-1;j--){
		for (x=j;x<gameTlength-1;x++){
			if (gameTable[i][x]==0)break;
			if(gameTable[i][x+1]==0){
				gameTable[i][x+1]=gameTable[i][x];
				gameTable[i][x]=0;continue;
			}
			if(gameTable[i][x+1]==1){
				gameTable[i][x+1]=gameTable[i][x];
				gameTable[i][x]=0;break;
			}
			if(gameTable[i][x+1]==gameTable[i][x]){
				gameTable[i][x+1]+=gameTable[i][x];
				gameTable[i][x]=1;break;
			}
			break;
		}
	}
}
for(i=0;i<gameTlength;i++){
for(j=0;j<gameTlength;j++)
if (gameTable[i][j]==1)
gameTable[i][j]=0;
}

}
//////////////////////////// Fucntion toBottom /////////////////////////////////
void toBottom(){
	int i=0,j=0,x=0;

    for (i=0;i<gameTlength;i++){
        for(j=gameTlength-2;j>-1;j--){
            for(x=j;x<gameTlength-1;x++){
                if (gameTable[x][i]==0) break;
                if (gameTable[x+1][i]==0){
                    gameTable[x+1][i]=gameTable[x][i];
                    gameTable[x][i]=0; continue;
                }
                if (gameTable[x+1][i]==1){
                    gameTable[x+1][i]=gameTable[x][i];
                    gameTable[x][i]=0; break;
                }
                if (gameTable[x+1][i]==gameTable[x][i]){
                    gameTable[x+1][i]+=gameTable[x][i];
                    gameTable[x][i]=1; break;
                }
                break;
            }
        }
    }

}

/////////////////////////////Function toLeft ////////////////////////////

void toLeft(){
	int i=0,j=0,x=0;

for(i=0;i<gameTlength;i++){
	for (j=1;j<gameTlength;j++){
		for (x=j;x>0;x--){
			if (gameTable[i][x]==0)break;
			if(gameTable[i][x-1]==0){
				gameTable[i][x-1]=gameTable[i][x];
				gameTable[i][x]=0;continue;
			}
			if(gameTable[i][x-1]==1){
				gameTable[i][x-1]=gameTable[i][x];
				gameTable[i][x]=0;break;
			}
			if(gameTable[i][x-1]==gameTable[i][x]){
				gameTable[i][x-1]+=gameTable[i][x];
				gameTable[i][x]=1;break;
			}
			break;
		}
	}
}
for(i=0;i<gameTlength;i++)
for(j=0;j<gameTlength;j++)
if (gameTable[i][j]==1)
gameTable[i][j]=0;


}
//////////////////- Function toTop -////////////////////////////

void toTop(){
	int i=0,j=0,x=0;

for(i=0;i<gameTlength;i++){
	for (j=1;j<gameTlength;j++){
		for (x=j;x>0;x--){
			if (gameTable[x][i]==0)break;
			if(gameTable[x-1][i]==0){
				gameTable[x-1][i]=gameTable[x][i];
				gameTable[x][i]=0;continue;
			}
			if(gameTable[x-1][i]==1){
				gameTable[x-1][i]=gameTable[x][i];
				gameTable[x][i]=0;break;
			}
			if(gameTable[x-1][i]==gameTable[x][i]){
				gameTable[x-1][i]+=gameTable[x][i];
				gameTable[x][i]=1;break;
			}
			break;
		}
	}
}

}
/////////////////- FUNCTION ANTILWIN -////////////////////


bool antilWin(){
	int i,j,win=0;
for(i=0;i<gameTlength;i++)
for(j=0;j<gameTlength;j++)
	if (gameTable[i][j]==1){
		gameTable[i][j]=0;
	}else if (gameTable[i][j]==max) win = 1;

	return win!=0?false:true;
}

///////////////- keys -/////////////////////////

void presKey(){
    int key=0;
    key=getch();
    if(key==224)
    key=getch();
    switch(key){
        case 77: toRight();antilWin(); getRandom(); PrintScreen(); break;
        case 75: toLeft();antilWin(); getRandom(); PrintScreen(); break;
        case 72: toTop(); antilWin();getRandom(); PrintScreen(); break;
        case 80: toBottom();antilWin(); getRandom(); PrintScreen(); break;
    }
}

Dă clic pentru opțiunea Răspunde sau Redirecționează
Se utilizează 0,92 GB (6%) din 15 GB
Administrează
Condiții - Confidențialitate
Ultima activitate în cont: Acum 15 minute
Detalii
