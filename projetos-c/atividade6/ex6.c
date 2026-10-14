#include <stdio.h>
#include <stdlib.h>

int main(void)
{
    //Crie um algoritmo que leia 10 números inteiros fornecidos consecutivamente pelo usuário e calcule a soma
    //acumulada de todos eles.

    int i, n, total;
    total = 0;
    printf("Este programa fara a soma de 10 numeros inteiros digitados por voce. \n");
    for (i = 1; i <= 10; i++){
        printf("Digite o valor %d: ", i);
        scanf("%d", &n);
        total += n;
    }
    printf("Este eh o total da soma de todos os valores: %d \n", total);
}
