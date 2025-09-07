def binarySearch(a,n,x):
        left = 0
        right = n-1 

        while left <= right:
                mid = (left+right)//2
                if(a[mid] == x):
                    return mid
                
                if(a[mid] < x):
                       left = mid+1
                else:   
                       right = right-1
        return -1

                     

result = binarySearch([2,6,8,10,13,16,18,19,20],9,13)

print (result)