def mdc(a, b):
    while b != 0:
        a, b = b, a % b
    return a

def simplificacao(n, d):
    g = mdc(abs(n), abs(d))
    return n // g, d // g

qtd_operacao = int(input())

for _ in range(qtd_operacao):
    entrada = input().split()
    n1 = int(entrada[0])
    d1 = int(entrada[2])
    operador = entrada[3]
    n2 = int(entrada[4])
    d2 = int(entrada[6])

    if operador == '+':
        final_n = n1 * d2 + n2 * d1
        final_d = d1 * d2
    elif operador == '-':
        final_n = n1 * d2 - n2 * d1
        final_d = d1 * d2
    elif operador == '*':
        final_n = n1 * n2
        final_d = d1 * d2
    elif operador == '/':
        final_n = n1 * d2
        final_d = n2 * d1

    simp_n, simp_d = simplificacao(final_n, final_d)
    print(f"{final_n}/{final_d} = {simp_n}/{simp_d}")
