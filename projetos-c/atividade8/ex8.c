#include <stdio.h>
#include <stdlib.h>

int main(void)
{
    //Desenvolva um programa que leia números inteiros continuamente até que o usuário digite o valor 0 (flag de
    //parada), exibindo a soma total dos valores lidos

    int n, total = 0;
    printf("Este programa ira ler numeros inteiros infinitamente ate voce digitar 0.\n");

    do{
        printf("Digite um numero: ");
        scanf("%d", &n);
        total += n;
    } while (n != 0);
    printf("Total da soma de todos os valores: %d\n", total);
    printf("Fim do programa");

    return 0;
}
