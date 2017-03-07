<?php
/*******
 * Find a complement of a given number
 * 
 *******/

// Complexity: O(log n)

// Given Integer
$number = 38;

$i = 0;
$j = 0;

while ($i < $number)
{
    $i += pow(2, $j);
    $j++;
}

$number_complement = $i - $number;

echo $number_complement;

