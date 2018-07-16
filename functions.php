<?php
// Mathematical function
function feelRich($amount) {
	// Converts USD to Zimbabwean dollars
	$zimbabwe = ($amount * 30000);
	// Converts USD to Japanese yen
	$yen = ($amount * 112.8);
	// Converts USD to Armenian Dram
	$armenianDram = ($amount * 480.10);
	return "You have: Z\$$zimbabwe Zimbabwean Dollars, ¥$yen Japanese Yen, and 
	֏$armenianDram Armenian Dram! Of course, this means nothing.";
}

echo(feelRich(100));

// String function
function noVowels($string) {
	$vowels = array("a", "e", "i", "o", "u");
	$lowerCase = strtolower($string);
	return str_replace($vowels, "", $lowerCase);
}

echo noVowels("The English language would be quite a bit more difficult to read without vowels.  It would sound 
kind of funny though.");