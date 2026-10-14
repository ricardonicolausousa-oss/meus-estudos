a, b, c = map(int, input().split())

maiorAB = (a + b + abs(a - b)) // 2
maiorABC = (maiorAB + c + abs(maiorAB - c)) // 2

print(f"{maiorABC} eh o maior")