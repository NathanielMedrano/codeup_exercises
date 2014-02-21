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
		
		
		$return = $sub . $front . "ay" . " ";
		
		}
	} while ($count < $count) ;
		return $return;
}

function eng($response, $translate) {

	if ($response == 'Y') {
		//var_dump($translate);
		$arr = explode(' ', $translate);
		//var_dump($arr);
		$arr_str = $arr;
		//print_r($arr_str);
		$keynum = count($arr);
		$count = &$keynum;
		
		do {
	foreach ($arr_str as $key => $value) {
	

		break;	
		$ay = str_replace('ay', "", $value);
	
		break;
		$last = substr($value, -1);
		$sub = str_replace($last, '', $value);
		
		echo $sub;
		
		}
	} while ($count < $count) ;

	} else {
		echo "Oodgay Yebay!";
	}
}

function get_input($word = FALSE) {
      
    if ($word) { 
      return strtoupper(trim(fgets(STDIN)));
   } else {
        return trim(fgets(STDIN));
    }
}


$count = 0;
echo 'Enter Sentence: ' . "\n";

$word = get_input();

$translate = trans($word); 
// var_dump($translate);
echo $translate;

echo "\n" . 'Translate Back? (Y)es, (N)o :' . "\n";


$response = get_input(TRUE);

echo eng($response, $translate);





