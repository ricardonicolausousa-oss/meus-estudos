from funcoes import validar_inscricao, imprimir_relatorio

while True:
    nome = input("Digite o nome do aluno (ou 'sair' para encerrar): ")
    if nome.lower() == "sair":
        print("Encerrando o programa...")
        break

    notas = []
    for i in range(4):
        while True:
            try:
                nota = float(input(f"Digite a nota {i+1} (0 a 10): "))
                if 0 <= nota <= 10:
                    notas.append(nota)
                    break
                else:
                    print("Nota inválida! Digite entre 0 e 10.")
            except ValueError:
                print("Entrada inválida! Digite um número.")

    media, categoria = validar_inscricao(notas)

    imprimir_relatorio(nome, media, categoria)
