<?php

//Problem: Now you are given a string S, which represents a software license key which we would like to format. The string S is composed of alphanumerical characters and dashes. The dashes split the alphanumerical characters within the string into groups. (i.e. if there are M dashes, the string is split into M+1 groups). The dashes in the given string are possibly misplaced. We want each group of characters to be of length K (except for possibly the first group, which could be shorter, but still must contain at least one character). To satisfy this requirement, we will reinsert dashes. Additionally, all the lower case letters in the string must be converted to upper case. So, you are given a non-empty string S, representing a license key to format, and an integer K. And you need to return the license key formatted according to the description above.

//Assumption1: String S consists only of alphanumerical characters (a-z and/or A-Z and/or 0-9) and dashes(-).
//Assumption2: String S is non-empty.

//Given String
$string = "2-4A0r7-4k";

// Group of characters of length
$substr_length = 4;

// Remove dashes to get a clean string
$str_with_removed_dashes = $result_string = str_replace("-", "", $string);

$final_string = "";

// Take mod to decide if its even split or otherwise
$mod = strlen($str_with_removed_dashes) % $substr_length;

// If its going to be an odd split, do this
if($mod != 0)
{
  // Assign first part to final string
  $final_string .= substr($str_with_removed_dashes, 0, $mod)."-";
  
  // Take second part into another string to chunk split later
  $result_string = substr($str_with_removed_dashes, $mod, strlen($str_with_removed_dashes));
}

// Chunck split the resulted string with dashes
$final_string .= chunk_split($result_string, $substr_length, "-");

// Remove the last dash to get the final string
echo rtrim($final_string, "-");
