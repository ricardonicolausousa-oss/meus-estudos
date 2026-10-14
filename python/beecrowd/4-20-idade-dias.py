age = int(input())
year = age // 365
month = (age % 365) // 30
day = (age % 365) % 30
print(f'{year} ano(s)')
print(f'{month} mes(es)')
print(f'{day} dia(s)')