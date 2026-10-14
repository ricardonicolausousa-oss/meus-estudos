x, y = map(int, input().split())
while x != y:
    if max(x, y) == x:
        print('Decrescente')
    else:
        print('Crescente')

    x, y = map(int, input().split())