nome = input("Digite o nome do funcionário: ")
salario = float(input("Digite o salário do funcionário: "))

salario_final = salario + (salario * 0.30)

print("\n===== RELATÓRIO =====")
print(f"Funcionário: {nome}")
print(f"Salário com acréscimo de 30%: R$ {salario_final:.2f}")
