c1, unit1, price1 = input().split()
c1 = str(c1)
unit1 = int(unit1)
price1 = float(price1)

c2, unit2, price2 = input().split()
c2 = str(c2)
unit2 = int(unit2)
price2 = float(price2)

TOTAL = ((unit1 * price1) + (unit2 * price2))
print(f'VALOR A PAGAR: R$ {TOTAL:.2f}')