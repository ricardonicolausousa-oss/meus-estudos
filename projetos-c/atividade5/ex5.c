#include <stdio.h>
#include <stdlib.h>

int main()
{
    //Elabore um programa que calcule e imprima a soma de todos os números inteiros contidos no intervalo de 1 até N,
    //onde N é informado pelo usuário

    int n_final, total;

    printf("Digite o numero final: ");
    scanf("%d", &n_final);
    total = n_final * (n_final + 1) / 2;
    printf("Soma de todos os numeros inteiros contidos no intervalo de 1 ate %d: %d", n_final, total);
}
