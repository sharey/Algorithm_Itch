<?php
/*******
 * Given an integer n, count the total number of digit 1 appearing in all non-negative integers less than or equal to n.
 * 
 *******/
 
// Assumption1: Given number is only 2 digits.

// Complexity: O()

// Given number
$number = 75;

$iteration = 0; // Start with iteration 0
if($number >= 10) // All numbers before 10 occur at one time only
{
    $iteration  = floor($number/10);
    $modulus    = $number%(10*$iteration);
    
    $formula = $iteration + 1;
     
    // For 10 and less, we dont want modulus +1 added
    if($number > 10) {
        $formula += $modulus + 1;
    }
}
else 
{
    $formula = ($iteration + 1);
}

echo $formula;
