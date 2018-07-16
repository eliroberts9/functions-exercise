<?php
// Mathematical function
function feelRich($amount) {
	// Converts USD to Zimbabwean dollars
	$zimbabwe = money_format('%.2n', ($amount * 30000));
	// Converts USD to Japanese yen
	$yen = money_format('%.2n', ($amount * 112.8));
	// Converts USD to Armenian Dram
	$armenianDram = money_format('%.2n', ($amount * 480.10));
	return "You have: Z\$$zimbabwe Zimbabwean Dollars, ¥$yen Japanese Yen, and 
	֏$armenianDram Armenian Dram! Those are big numbers! Of course, they mean nothing.";
}

echo(feelRich(100));

// String function
function noVowels($string) {
	// Array containing strings to search for
	$vowels = array("a", "e", "i", "o", "u");
	// Converts input string to lowercase so capitals aren't ignored.
	$lowerCase = strtolower($string);
	return str_replace($vowels, "", $lowerCase);
}

echo noVowels("The English language would be quite a bit more difficult to read without vowels.  It would sound 
kind of funny though.");

// Array function
$catNames = array("Jeff", "Captain FuzzyPants", "Squishy Biscuits", "Carl", "Peanut", "Garfield", "Mister Whiskers");

function alphabetical($arr) {
	// Sorts the array in alphabetical order
	sort($arr);
	// Echos each value in the array
	foreach($arr as $key => $val) {
		echo "$val, ";
	}
}

alphabetical($catNames);