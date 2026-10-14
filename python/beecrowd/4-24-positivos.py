a = float(input())
b = float(input())
c = float(input())
d = float(input())
e = float(input())
f = float(input())

positivo = 0
list = [a, b, c, d, e, f]

for n in list:
    if n >= 0:
        positivo += 1
print(f'{positivo} valores positivos')
