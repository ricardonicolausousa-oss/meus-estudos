from datetime import datetime
import math

print("Olá, seja bem vindo! Esse aplicativo calculará se você está apto para receber um empréstimo bancário. Siga as intruções abaixo:")

nome = input('Digite seu nome completo: ')

print('Abaixo, você escreverá o seu ano de nascimento de forma repartida, em números: ano, mês(em número) e dia.')
ano = int(input('Digite o seu ano de nascimento: '))
mes = int(input('Digite o seu mês de nascimento (em números): '))
dia = int(input('Digite o seu dia de nascimento: '))
data_nascimento = datetime(ano, mes, dia)
data_atual = datetime.now()
idade = (data_atual.year - data_nascimento.year)
if data_atual.month < data_nascimento.month:
    idade = idade - 1
elif data_atual.month == data_nascimento.month:
    if data_atual.day < data_nascimento.day:
        idade = idade - 1

renda_mensal = float(input('Digite sua renda mensal (sem R$): '))
valor_patrimonio = float(input('Digite o valor do seu patrimônio (sem R$):'))
score_credito = int(input('Digite seu score do crédito (0 a 1000): '))
dividas = input('Possui dívidas ativas? (Sim/Não): ')
residencia = input('Digite o seu tipo de residência (Própria/Alugada/Financiada): ')

if idade >= 18:
    if renda_mensal > 0:
        if score_credito >= 300:
            if valor_patrimonio >= 50000 or dividas == "Não":
                if residencia == "Própria" or residencia == "Financiada":
                    emprestimo = float(input("Digite o valor do empréstimo desejado: "))
                    parcelas = int(input('Digite em quantas vezes você quer parcelar (em números): '))
                    valor_parcela = math.ceil(emprestimo / parcelas)
                    if valor_parcela >= renda_mensal:
                        print(f'Parabéns! Você está apto para receber o empréstimo.\nValor do empréstimo: {emprestimo}\nValor da parcela mensal: {valor_parcela}')
                    else:
                        print('Você não está apto para receber este empréstimo, pois o valor da parcela excede a sua renda.')
                else:
                    print('Você não está apto para receber o empréstimo, pois sua residência é instável.')
            else:
                print('Você não está apto para receber o empréstimo, pois seu patrimônio é pequeno demais ou porque você atualmente encontra-se individado')
        else:
            print('Você não está apto para receber um empréstimo, pois seu score é baixo demais.')
    else:
        print('Você não está apto para receber um empréstimo, pois não possui renda mensal.')
else:
    print('Você não está apto para receber um empréstimo, pois é menor de idade.')