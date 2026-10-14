nome = input('Digite o seu nome: ')
idade = int(input('Digite sua idade: '))
nacionalidade = input('Digite sua nacionalidade [BR/EUA]: ')

if idade >= 16 and nacionalidade == 'EUA':
    print('Cidadão possui idade mínima para ter um CNH nos Estados Unidos da América.')
elif idade >= 18 and nacionalidade == 'BR':
    print('Cidadão possui idade mínima para ter um CNH no Brasil.')
else:
    print('Cidadão não possui idade mínima.')