NAME = input()
SALARY = float(input())
SALES = float(input())
COMISSION = 0
COMISSION = (COMISSION + (SALES * 0.15))
TOTAL_SALARY = (SALARY + COMISSION)
print(f'TOTAL = R$ {TOTAL_SALARY:.2f}')