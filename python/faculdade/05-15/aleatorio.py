from random import randint

num = randint(0, 100)
tentativa = None

print("Tente adivinhar o número entre 0 e 100!")

while tentativa != num:
    tentativa = int(input("Digite seu palpite: "))
    if tentativa < num:
        print("O número é maior!")
    elif tentativa > num:
        print("O número é menor!")
    else:
        print("Parabéns, você acertou!")
