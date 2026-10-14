n_test = int(input())
for i in range(n_test):
    x, y = map(int, input().split())
    if y == 0:
        print('divisao impossivel')
    else:
        print(x / y)