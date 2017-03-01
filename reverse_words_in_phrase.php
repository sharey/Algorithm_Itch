<?php
/*******
 * Reverse the words in a phrase
 * 
 *******/

//Assumptions 1: Each word has atleast one space in it.
//Assumptions 2: Entire phrase doesnt have any spaces at the beginning and end.

// Complexity: O(n)

// Given Phrase
$given_phrase = $argv[1]; 

// Define variables
$arr_stack  = array();
$word       = "";

// Iterate through phrase to collect each word. O(n)
for($i=0;$i<strlen($given_phrase);$i++)
{
    // When space is encountered. Stack the word collected so far and reset it.
    if($given_phrase[$i] == ' ')
    {
        $arr_stack[] = $word;
        $word = "";
    }
    else // Keep appending to the word until space is encountered
    {
        $word .= $given_phrase[$i];
        
        // This is to handle the last word in the phrase 
        if($i == strlen($given_phrase)-1)
            $arr_stack[] = $word;
    }
}

// Rotate through the stack in reverse to show the words. O(m), where m is the number of words in a phrase
$k = count($arr_stack);
while($k > 0)
{
    echo $arr_stack[$k-1]." ";
    $k--;    
}
printf("\n");
