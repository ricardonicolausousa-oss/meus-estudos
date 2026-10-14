n = int(input())

for i in range(n):
    n1, n2, n3 = map(float, input().split())
    media_pon = ((n1 * 2) + (n2 * 3) + (n3 * 5)) / (2 + 3 + 5)
    print(f'{media_pon:.1f}')