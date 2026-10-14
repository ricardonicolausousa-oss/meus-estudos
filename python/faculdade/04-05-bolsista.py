def ler_nota(mensagem):
    while True:
        nota = float(input(mensagem))
        if 0 <= nota <= 10:
            return nota
        print('Nota inválida, digite novamente.')

def media_nota():
    media = (n1 + n2 + n3 + n4) / 4
    return media 

def validar_inscricao():
    if media_nota() > 8:
        if idade < 18:
            candidato = 'Candidato Prioritário'
        else:
            candidato = 'Candidato Bolsista'
    else:
        candidato = 'Candidato inválido'
    return candidato

def imprimir_relatorio():
    print(f'Nome do aluno: {nome}')
    print(f'Média do aluno: {media}')
    print(f'Classificação da bolsa: {candidato}')


while True:
    nome = input('Digite o nome do aluno: ')
    n1 = ler_nota('Digite a primeira nota: ')
    n2 = ler_nota('Digite a segunda nota: ')
    n3 = ler_nota('Digite a terceira nota: ')
    n4 = ler_nota('Digite a quarta nota: ')
    
    media = media_nota()
    
    renda_familiar = float(input('Digite sua renda familiar: '))
    idade = int(input('Digite a idade do aluno: '))
    
    candidato = validar_inscricao()

    print(imprimir_relatorio())

    resp = input('Deseja continuar? Se não, digite SAIR: ')
    if resp == 'SAIR' or resp == 'sair':
        break