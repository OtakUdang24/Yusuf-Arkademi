def bubbleSort(arr):
    arr = arr
    n = len(arr)
    for h in range(n):
        for i in range(len(arr[h])): #array a c b
            leng = len(arr[h])
            for j in range(0, leng-i-1): # Sortir Array a b c
                if ord(arr[h][j]) < ord(arr[h][j+1]) :
                    arr[h][j], arr[h][j+1] = arr[h][j+1], arr[h][j]
    output = []
    for i in range(n):
        for j in range(len(arr[h])):
            if j == 0:
                output.append(arr[i][0])
    print(output)

data = [
    ['g','h','x','j','d'],
    ['a','c','b','e','d'],
    ['q','w','a'],
]
bubbleSort(data)
