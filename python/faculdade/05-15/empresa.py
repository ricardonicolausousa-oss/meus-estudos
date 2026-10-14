import math
from math import floor

emprestimo = int(input('Digite o valor do empréstimo desejado: '))
faturamento = int(input('Digite faturamento mensal da empresa: '))
score = int(input('Digite seu score: '))
ano = int(input('Digite a idade em anos da empresa: '))
setor = input('Digite seu setor [TECNOLOGIA/VAREJO/OUTRO]: ')
divida = input('Digite se a empresa está endividada [SIN/NÃO]: ')

def vip():
    global taxa
    if faturamento >= 50000:
        taxa = 0.2
        print(f'Parabéns, o faturamento da sua empresa atende os requisitos para a taxa VIP de 2%')
    else:
        taxa = 0.5
        print(f'Essa é a sua taxa: 5%')

def exibir():
    total = emprestimo + (emprestimo * taxa)
    print('EMPRÉSTIMO APROVADO')
    print(f'Valor total com juros: {total}\nSeu score: {score / 10}')


if ano >= 2 or setor == 'TECNOLOGIA':
    parcela = math.ceil(emprestimo / 24)
    if parcela >= (faturamento * 0.3):
        if score >= 700 or 500 <= score > 700 and emprestimo == 'NÃO':
            garantia = int(input('Digite a garantia que sua empresa irá oferecer: ')) 
            if setor == 'VAREJO' and garantia == (emprestimo * 0.5) :
                vip()
                exibir()
            elif setor == 'TECNOLOGIA' and garantia == (emprestimo * 0.3) or setor =='OUTROS' and garantia == (emprestimo * 0.3):
                vip()
                exibir()
            else:
                print('Proposta negada: garantia insuficiente para o setor.')
        else: 
            print('Proposta negada. Score baixo demais.')
    else: 
        print('Proposta negada. Parcela compromete muito o faturamento mensal.')
else:
    print('Proposta negada. Tempo de mercado insuficiente.')