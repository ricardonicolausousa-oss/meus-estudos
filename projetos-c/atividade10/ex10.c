#include <stdio.h>
#include <stdlib.h>

int main()
{
    //Crie um programa que receba um número inteiro positivo N e exiba os N primeiros números ímpares positivos.

    int n, i, impar;

    do
    {
        printf("Digite um numero inteiro positivo: ");
        scanf("%d", &n);
    } while (n <= 0);

    impar = 1;

    for (i = 1; i <= n; i++)
    {
        printf("%d\n", impar);
        impar = impar + 2;
    }

    return 0;
}
