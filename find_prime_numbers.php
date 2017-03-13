<?php
# Given number n, find total number of prime numbers less than n. n > 1.

# Assumption1: 2 is already counted as prime number. You can begin from 3. 

$given_number = 10;

$count = 1;
for($i=3; $i <= $given_number; $i++)
{
    ${"counter_".$i} = 0;
    for($k=2; $k <= $given_number; $k++)
    {
        if($i != $k)
        {
            if($i%$k != 0)   
            {
                ${"counter_".$i} = 1;
            }
            else
            {
                ${"counter_".$i} = 0;
                break;
            }
            
        }
    }
    
    if(${"counter_".$i})
        $count += 1;
}

echo "Total Prime Numbers -> ".$count;
