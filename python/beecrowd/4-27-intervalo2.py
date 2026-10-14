n_test = int(input())
variaveis = []
fora = 0
dentro = 0

for _ in range(n_test):
    n = int(input())
    if n > 20 or n < 10:
        fora += 1
    else:
        dentro += 1

print(f'{dentro} in')
print(f'{fora} out')