def calcular_media(notas):
    """Recebe uma lista de notas e retorna a média aritmética."""
    return sum(notas) / len(notas)


def validar_inscricao(notas):
    """Solicita renda e idade, chama calcular_media e classifica o aluno."""
    media = calcular_media(notas)
    renda = float(input("Digite a renda familiar: "))
    idade = int(input("Digite a idade do aluno: "))

    if media > 8:
        if idade < 18:
            categoria = "Candidato Prioritário"
        else:
            categoria = "Candidato Bolsista"
    elif media >= 6:
        if renda < 2000:
            categoria = "Candidato Bolsista Parcial"
        else:
            categoria = "Candidato Regular"
    else:
        categoria = "Não Elegível"

    return media, categoria


def imprimir_relatorio(nome, media, categoria):
    """Exibe os dados formatados do aluno."""
    print("\n===== RELATÓRIO DO ALUNO =====")
    print(f"Nome: {nome}")
    print(f"Média: {media:.2f}")
    print(f"Categoria: {categoria}")
    print("==============================\n")
