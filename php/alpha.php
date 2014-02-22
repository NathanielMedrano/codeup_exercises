<?php
// Create a function alphabet_soup($str) that accepts a string and will return 
// the string in alphabetical order. E.g. "hello world" becomes "ehllo dlorw". 
// So make sure your function separates and alphabetizes each word separately.

function alpha($input) {

	$arr = str_split($input);

	usort($arr, 'strnatcasecmp');
	return $arr;

}

$word = "Supercalafragalisticexpialadocious";



$result = (alpha($word));

$res = implode("", $result);

echo $res;