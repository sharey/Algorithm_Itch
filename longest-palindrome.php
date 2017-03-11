<?php

$debug = false; // DEBUG FLAG

//echo "<pre>";print_r($_POST);
//$string = "sracecarsabcdefgfedcb";

$string = strtolower($_POST['string']);

echo "<br>Given String -> ".$string."<br>";

$string_length = strlen($string); // GET A STRING LENGTH

$longest_palindrome_length = 0;
if($string_length > 2) // LESS THAN OR EQUAL TO 2 IS NEVER A PALINDROME
{
	for($i = 1; $i < $string_length; $i++)
	{
		$pivot 	= $i;
		$incre 	= 1; // FOR BACK AND FORWARD LETTER
		$store	= ''; // CURRENT PALINDROME
		
		while ($incre > 0)
		{			
			$backward = $pivot-$incre;
			$forward	= $pivot+$incre;
			
			if($debug)	echo "<hr>".$string[$backward]." -- ".$string[$forward];
			if($string[$backward] == $string[$forward] && $forward < $string_length) // MATCH THE LETTER AND FORWARD SHOULDNT EXCEED LENGTH
			{
				if($incre == 1)
					$store 	= $string[$pivot];
	
				$store .= $string[$forward]; // STORE THE FORWARD STRING
				if($debug)	echo "<br>".$store;
				
				$incre++;
			}
			else
			{
				$incre = 0;
			}
		}
		
		// IF LONGEST PALINDROME STRING FOUND, REPLACE HERE
		if(!empty($store) && strlen($store) > $longest_palindrome_length) {
			$longest_palindrome_length = strlen($store);
			$longest_palindrome_partial = $store;
		}
	}
}

if($longest_palindrome_length > 0)
{
	$longest_palindrome = '';
	
	while ($longest_palindrome_length > 0)
	{
		$longest_palindrome .= $longest_palindrome_partial[$longest_palindrome_length]; // PRINT THE LONGEST PARTIAL PALINDROME BACKWARDS
		
		$longest_palindrome_length--;
	}
	
	$longest_palindrome .= $longest_palindrome_partial;
	
	echo "<br>Longest Palindrome --> ".$longest_palindrome;
}
else
{
	echo "<br>No Palindrome found in given string.";
}

?>


<br /><br /><br />
<form name="longest_palindrome" method="post" action="">
	<input type="text" name="string" value="" size="40">
	<input type="submit" name="submit" value="Give me longest Palindrome">
</form>