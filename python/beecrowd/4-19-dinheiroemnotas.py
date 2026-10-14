value = int(input())
value_i = value
n100 = value // 100
value = value % 100
n50 = value // 50
value = value % 50
n20 = value // 20
value = value % 20
n10 = value // 10
value = value % 10
n5 = value // 5
value = value % 5
n2 = value // 2
value = value % 2
n1 = value // 1
value = value % 1

print(value_i)
print(f'{n100} nota(s) de R$ 100,00')
print(f'{n50} nota(s) de R$ 50,00')
print(f'{n20} nota(s) de R$ 20,00')
print(f'{n10} nota(s) de R$ 10,00')
print(f'{n5} nota(s) de R$ 5,00')
print(f'{n2} nota(s) de R$ 2,00')
print(f'{n1} nota(s) de R$ 1,00')
