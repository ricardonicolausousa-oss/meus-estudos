print('Olá, este programa tem como função mostrar a velocidade média que um carro teria para viajar de ponto A ate ponto B durante uma janela de tempo específica. Siga as intruções abaixo:')
cidade1 = input('Digite o nome do ponto A: ')
cidade2 = input('Digite o nome do ponto B: ')

distancia_k = input('Digite a distância entre os dois pontos (primeiro os km):')
distancia_k = int(distancia_k)
distancia_m = input('Digite a distância entre os dois pontos (o restante de metros):')
distancia_m = int(distancia_m)
distancia = (distancia_k + (distancia_m / 1000))


tempo_h = input('Digite o tempo que você deseja que o carro realize o trajeto (se for quebrado, digite a hora primeiro):')
tempo_h = int(tempo_h)
tempo_m = input('Digite o tempo que você deseja que o carro realize o trajeto (se for quebrado, digite agora os minutos e, caso não houver, digite 0):')
tempo_m = int(tempo_m)
tempo_real = ((tempo_m / 60) + tempo_h)

velocidade_media = (distancia / tempo_real)
print(f'{cidade1} até {cidade2} \n Distância: {distancia} \n Tempo: {tempo_real}')
print(f'Esta é a velocidade média que veículo necessitará: {velocidade_media}km/h')