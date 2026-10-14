second = int(input())

hour = second // 3600
minute = (second % 3600) // 60
second = second % 60

print(f"{hour}:{minute}:{second}")