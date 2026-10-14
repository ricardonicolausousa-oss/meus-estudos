n1 = float(input())
while 0.0 > n1 or n1 > 10.0:
    print('nota invalida')
    n1 = float(input())

n2 = float(input())
while 0.0 > n2 or n2 > 10.0:
    print('nota invalida')
    n2 = float(input())

media = (n1 + n2) / 2
print(f'media = {media:.2f}')
