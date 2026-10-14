import math

print('Este programa realiza um cálculo utilizando a fórmula de bháskara, siga as instruções abaixo.')
a = input('Digite o valor A da equação: ')
b = input('Digite o valor B da equação: ')
c = input('Digite o valor C da equação: ')
a = float(a)
b = float(b)
c = float(c)

delta = (b**2 -(4*a)*c)
if delta < 0:
    print('Raíz imaginária, tente novamente com um delta positivo.')
else:
    raiz1 = ((-(b) + (math.sqrt(delta)))/2*a)
    raiz2 = ((-(b) - (math.sqrt(delta)))/2*a)

    print(f'Resultados: {raiz1}, {raiz2}')