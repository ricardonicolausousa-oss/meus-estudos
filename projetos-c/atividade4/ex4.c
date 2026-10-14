#include <stdio.h>
#include <stdlib.h>

int main()
{
    //Escreva um programa que leia um número inteiro positivo e apresente a sua tabuada completa de multiplicação de 1 a 10.

    int n, i, resultado;
    do {
        printf("Digite um numero inteiro positivo: ");
        scanf("%d", &n);

        if (n <= 0) {
            printf("Numero invalido. Digite novamente:\n");
        }
    } while (n <= 0);

    for (i = 1; i <= 10; i++){
        resultado = (n * i);
        printf("%d * %d = %d\n", n, i, resultado);
    }
}
