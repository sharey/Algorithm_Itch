
# Given an array and a value, remove all instances of that value in place and return the new length.
 
# Assumption1: Do not allocate extra space for another array, you must do this in place with constant memory.

# Complexity: O(n)

# Given an array
arr_numbers = [0,1,34,1,4,1,6,9,10,34]

number_to_remove =  34

pre_count = len(arr_numbers)

i=0
for i in arr_numbers:
    if i == number_to_remove:
        arr_numbers.remove(i)
    
    i+=1

print(len(arr_numbers))