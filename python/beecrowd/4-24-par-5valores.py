a = int(input())
b = int(input())
c = int(input())
d = int(input())
e = int(input())

lista = [a, b, c, d, e]
qtd_par = 0

for n in lista:
    par = n % 2
    if par == 0:
        qtd_par += 1
print(f'{qtd_par} valores pares')