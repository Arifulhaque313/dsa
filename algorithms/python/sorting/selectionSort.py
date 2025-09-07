def selectionSort(a,n):
        
        for step in range(n):
                min_index = step
                for i in range(step+1,n):
                        if(a[i] < a[min_index]):
                                min_index = i


                (a[step],a[min_index]) = (a[min_index],a[step])
                    

                     
a = [18,13,8,10,6,16,2,19,20]
selectionSort(a,9)

print (a)