tempo_casa = int(input('Digite o seu tempo na casa em anos: '))
salario = int(input('Digite seu salário: '))
nome = input('Digite seu nome: ')
meta = input('Digite sua meta: ')

if tempo_casa >= 5 and meta >= 80:
    salario_n = salario + (salario * 0.3)
    print(f'Parabéns, você foi promovido. Este é seu novo salário: {salario_n}')
elif tempo_casa >= 5 and meta < 80:
    salario_n = salario + (salario * 0.2)
    print(f'Parabéns, este é seu novo salário: {salario_n}')    
elif tempo_casa < 5 and meta >= 80:
    salario_n = salario + (salario * 0.1)
    print(f'Parabéns, este é seu novo salário: {salario_n}')
else:
    print('Requisitos para promoção e/ou aumento não foram atendidos.')