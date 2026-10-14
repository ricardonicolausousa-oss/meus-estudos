n_test = int(input())
lista = []

for i in range(n_test):
    inicio, fim = map(int, input().split())
    lista.clear()

    if min(inicio, fim) % 2 == 1:
        for i in range(min(inicio, fim) + 2, max(inicio, fim), 2):
            lista.append(i)
        print(sum(lista))
    
    else:
        for i in range(min(inicio, fim) + 1, max(inicio, fim), 2):
            lista.append(i)
        print(sum(lista))
        