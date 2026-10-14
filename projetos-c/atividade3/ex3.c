#include <stdio.h>
#include <stdlib.h>

int main(void)
{
    //Faça um programa que execute uma contagem regressiva de 10 até 0 usando 'do-while', imprimindo ao final a mensagem 'Fim da contagem!'.
    int n = 10;
    do {
        printf("%d\n", n);
        n--;
    } while (n >= 0);
    printf("Fim da contagem!");
}
