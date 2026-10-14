nome = input("Digite seu nome: ")
salario = float(input('Digite seu salário: '))
tempo_casa = int(input('Digite a quantidade de anos que você trabalha na empresa: '))
meta = float(input('Digite a sua meta (em números, sem R$): '))
salario_novo = (salario + (salario * 0.30))

if tempo_casa >= 2 and meta >= 80:
    print(f"Parabéns, você foi promovido!\nEste será o seu novo salário: {salario_novo}")

elif tempo_casa < 2 and meta >= 80:
    print(f'Parabéns por bater a sua meta! Este será o seu salário: {salario_novo}')

elif tempo_casa >= 2 and meta < 80:
    print(f'Devido ao seu tempo de serviço à empresa, você receberá um aumento!\nEste será o seu novo salário: {salario_novo}')

else:
    print("Sobrou nada")