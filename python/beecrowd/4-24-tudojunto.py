a = int(input())
b = int(input())
c = int(input())
d = int(input())
e = int(input())

list = [a, b, c, d, e]
qtd_par = 0
qtd_impar = 0
qtd_positivo = 0
qtd_negativo = 0

for n in list:
    if (n % 2) == 0:
        qtd_par += 1
    else:
        qtd_impar += 1
    
    if n > 0:
        qtd_positivo += 1
    elif n < 0:
        qtd_negativo += 1

print(f'{qtd_par} valor(es) par(es)')
print(f'{qtd_impar} valor(es) impar(es)')
print(f'{qtd_positivo} valor(es) positivo(s)')
print(f'{qtd_negativo} valor(es) negativo(s)')