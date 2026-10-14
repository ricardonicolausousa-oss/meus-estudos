n = int(input())
for i in range(n):
    if i % 2 == 0 and i > 0:
        quadrado = i**2
        print(f'{i}^2 = {quadrado}')
quadrado = n**2
print(f'{n}^2 = {quadrado}')