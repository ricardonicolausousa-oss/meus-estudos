produto, quantidade = map(int, input().split())
if produto == 1:
    preco = 4.00
elif produto == 2:
    preco = 4.50
elif produto == 3:
    preco = 5.00
elif produto == 4:
    preco = 2.00
elif produto == 5:
    preco = 1.50
else:
    print('Produto inexistente.')

total = (quantidade * preco)

print(f'Total: R$ {total:.2f}')