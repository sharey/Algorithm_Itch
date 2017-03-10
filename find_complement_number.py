# Find a complement of a given number
# Complement is the number that results when you flip the bits of an integer number

# Complexity: O(log n)

# Given Integer
number = 10

i = 0
j = 0

while (i < number):
    i += pow(2, j)
    j += 1

number_complement = i - number

print(number_complement)

