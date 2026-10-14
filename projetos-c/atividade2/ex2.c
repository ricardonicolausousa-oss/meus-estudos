#include <stdio.h>
#include <stdlib.h>

int main(void){
    // Crie um algoritmo que utilize um laço 'while' para exibir todos os números pares situados no intervalo de 1 a 50.

    int i = 1;
    while (i <= 50){
        if (i % 2 == 0) {
            printf("Numero par: %d\n", i);
            i++;
        }
        i++;
        continue;
    }
}
