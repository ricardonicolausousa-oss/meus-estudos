#include <stdio.h>
#include <stdlib.h>

int main()
{
    //Escreva um algoritmo que imprima todos os números múltiplos de 3 compreendidos entre 1 e 100

    int n = 3;
    printf("Este programa exibira todos os multiplos de 3 compreendidos entre 1 e 100.\n");

    do {
        printf("%d\n", n);
        n += 3;

    } while (n <= 100);

    return 0;
}
