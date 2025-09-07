def heapify(arr, n, i):
    largest = i  
    left = 2 * i + 1     
    right = 2 * i + 2     

    if left < n and arr[i] < arr[left]:
        largest = left

    if right < n and arr[largest] < arr[right]:
        largest = right

    if largest != i:
        arr[i], arr[largest] = arr[largest], arr[i]  
        heapify(arr, n, largest)

def maxHeap(arr):
    n = len(arr)

    for i in range(n // 2 - 1, -1, -1):
        heapify(arr, n, i)

    return arr

arr = [3, 5, 1, 10, 2, 7]
maxHeap(arr)      
print(arr)