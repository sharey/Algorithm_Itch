# Find the longest non repeated substring length within the given string
----------------------------------------------------------------------
<?php

$given_string = (!empty($argv[1]) ? $argv[1] : "abcdefgabdcstuvwxyz");

if(empty($given_string)) {
    die("Invalid String");
}

$max_length         = 0;
$max_length_string  = "";
$arr_letters_visited= array();

// One pointer i to iterate through all letters in given string and put it in visited array
for($i= $j = 0; $i<strlen($given_string); $i++)
{
    // If current letter is found in visited array, increment second pointer j to next of visited letter's index
    if(array_key_exists($given_string[$i], $arr_letters_visited)) {
        $j = max($j, $arr_letters_visited[$given_string[$i]]+1);
    }
    
    $arr_letters_visited[$given_string[$i]] = $i; // Replace visited index to new
    
    // Calculate max length and string here
    if($max_length < $i-$j+1)
    {
        $max_length = $i-$j+1;
        $max_length_string = substr($given_string, $j, $max_length);
    }
}

echo "\r\nLongest non repeated substring of given string '".$given_string."' is: ";
echo $max_length." (".$max_length_string.")\r\n";


