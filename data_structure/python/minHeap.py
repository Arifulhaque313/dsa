def heapify(arr, n, i):
    smallest = i  
    left = 2 * i + 1     
    right = 2 * i + 2     

    if left < n and arr[i] > arr[left]:
        smallest = left

    if right < n and arr[smallest] > arr[right]:
        smallest = right

    if smallest != i:
        arr[i], arr[smallest] = arr[smallest], arr[i]  
        heapify(arr, n, smallest)


def minHeap(arr):
    n = len(arr)

    for i in range(n // 2 - 1, -1, -1):
        heapify(arr, n, i)

    return arr  

arr = [3, 5, 1, 10, 2, 7]
minHeap(arr)      
print(arr)