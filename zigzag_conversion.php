<?php

/**** 
*
* Zigzag Conversion - Convert regular string to zigzag converted
* Example: BARRACUDANETWORKS with 3 rows should be BAAWSARCDNTOKRUER

B   A   A   W   S
A R C D N T O K
R   U   E   R

****/

// Inputs
$string = "BARRACUDANETWORKSISHIRING"; // String to work with            // 1
$z 			= 3; // Number of rows                                                // 1

// Variables to consider
$s = strlen($string); // Length of the string                            // 1+1
$l = 1; // Counter to decide the strings                                 // 1

// Loop to initiaze string variables
for($j=1; $j<=$z; $j++)                                                  // n
    ${"string".$j} = "";                                                 // 1

// Loop through teh string chars
for($i=0; $i<$s; $i++)                                                   // n
{
    for($k=1; $k<=$z; $k++)                                              // n*n
    {
        if($l == $k)                                                     // (1)n*n
        {
            ${"string".$k} .= $string[$i];                               // (1)n*n
            
            if($k == 1) $a = 0;                                          // (1)n*n
            
            if($k == $z) $a = 1;                                         // (1)n*n
        }    
    }
    
    if($a == 0)    $l++;                                                // (1)n*n
    else    $l--;                                                       // (1)n*n
}

// Print the result
echo "Result ->";

for($j=1; $j<=$z; $j++)                                                 // n
    echo ${"string".$j};                                                // 1

?>