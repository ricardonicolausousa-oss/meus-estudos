value = float(input())
value = int(round(value * 100))
n100 = value // 10000; value %= 10000
n50  = value // 5000;  value %= 5000
n20  = value // 2000;  value %= 2000
n10  = value // 1000;  value %= 1000
n5   = value // 500;   value %= 500
n2   = value // 200;   value %= 200
m1   = value // 100;   value %= 100
m05  = value // 50;    value %= 50
m025 = value // 25;    value %= 25
m010 = value // 10;    value %= 10
m005 = value // 5;     value %= 5
m001 = value // 1;     value %= 1

print('NOTAS:')
print(f'{n100} nota(s) de R$ 100.00')
print(f'{n50} nota(s) de R$ 50.00')
print(f'{n20} nota(s) de R$ 20.00')
print(f'{n10} nota(s) de R$ 10.00')
print(f'{n5} nota(s) de R$ 5.00')
print(f'{n2} nota(s) de R$ 2.00')
print('MOEDAS:')
print(f'{m1} moeda(s) de R$ 1.00')
print(f'{m05} moeda(s) de R$ 0.50')
print(f'{m025} moeda(s) de R$ 0.25')
print(f'{m010} moeda(s) de R$ 0.10')
print(f'{m005} moeda(s) de R$ 0.05')
print(f'{m001} moeda(s) de R$ 0.01')
