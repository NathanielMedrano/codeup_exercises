<?php

function trans($word) {

$arr = explode(' ', $word);
//$string = implode(',', $arr);
$arr_str = ($arr);
$keynum = count($arr);
$count = &$keynum;

	do {
	foreach ($arr_str as $key => $value) {
	
		$letter = $value;
		$front = $letter[0];
		$sub = substr($letter, 1);
		//print_r($front);
		echo $sub . $front . "ay" . " ";
		
		}
	} while ($count < $count) ;
}

function get_input($word = FALSE) {
      
    if ($word) { 
      return trim(fgets(STDIN));
   } else {
        return trim(fgets(STDIN));
    }
}


$count = 0;
echo 'Enter Sentence: ' . "\n";

$word = get_input(TRUE);

$translate = trans($word);

