#include <stdio.h>
#include <stdlib.h>

int main(void)
{
    //Faça um programa que leia 10 valores inteiros do usuário e exiba quantos deles são números negativos.

    int n, i, total_neg, total_neg = 0;

    printf("Este programa lera 10 valores inteiros digitados por voce, e mostrara quantos deles sao negativos.\n");

    for (i = 1; i <= 10; i++){
        printf("Digite valor %d: ", i);
        scanf("%d", &n);

        if (n < 0) {
            total_neg++;
        }
    }

    printf("Este eh o total de numeros negativos que apareceram: %d\n", total_neg);
    return 0
}
