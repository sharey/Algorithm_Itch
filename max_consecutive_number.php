<?php
/*******
 * Find max consecutive ones
 * 
 *******/
 
// Assumption1: The input array will only contain 0 and 1.
// Assumption2: The length of input array is a positive integer and will not exceed 10,000 

// Complexity: O(n)

// Given an array
$arr_numbers = array(0,1,1,0,1,1,0,1,1,1,1,1,1,0);

$i = 0;
$c = 1;
$max_count = 0;

// Iterate throught array
for($i=0; $i < count($arr_numbers)-1;$i++)
{
    if($arr_numbers[$i] != $arr_numbers[$i+1]) // when number changes, reset counter
    {
        $c = 1;
    }
    else // else keep increasing the counter while the number is same
    {
        $c += 1; 
    }
    
    if($c > $max_count) // Record the max counter
        $max_count = $c;
    
}


echo $max_count;

