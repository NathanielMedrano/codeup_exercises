<?php

$morseCodes = array(
  array('char'=>'0', 'morse'=>"-----"),
   array('char'=>'1', 'morse'=>".----"),
   array('char'=>'2', 'morse'=>"..---"),
   array('char'=>'3', 'morse'=>"...--"),
   array('char'=>'4', 'morse'=>"....-"),
   array('char'=>'5', 'morse'=>"....."),
   array('char'=>'6', 'morse'=>"-...."),
   array('char'=>'7', 'morse'=>"--..."),
   array('char'=>'8', 'morse'=>"---.."),
   array('char'=>'9', 'morse'=>"----."),
  
   array('char'=>'A', 'morse'=>".-"),
   array('char'=>'B', 'morse'=>"-..."),
   array('char'=>'C', 'morse'=>"-.-."),
   array('char'=>'D', 'morse'=>"-.."),
   array('char'=>'E', 'morse'=>"."),
   array('char'=>'F', 'morse'=>"..-."),
   array('char'=>'G', 'morse'=>"--."),
   array('char'=>'H', 'morse'=>"...."),
   array('char'=>'I', 'morse'=>".."),
   array('char'=>'J', 'morse'=>".---"),
   array('char'=>'K', 'morse'=>"-.-"),
   array('char'=>'L', 'morse'=>".-.."),
   array('char'=>'M', 'morse'=>"--"),
   array('char'=>'N', 'morse'=>"-."),
   array('char'=>'O', 'morse'=>"---"),
   array('char'=>'P', 'morse'=>".--."),
   array('char'=>'Q', 'morse'=>"--.-"),
   array('char'=>'R', 'morse'=>".-."),
   array('char'=>'S', 'morse'=>"..."),
   array('char'=>'T', 'morse'=>"-"),
   array('char'=>'U', 'morse'=>"..-"),
   array('char'=>'V', 'morse'=>"...-"),
   array('char'=>'W', 'morse'=>".--"),
   array('char'=>'X', 'morse'=>"-..-"),
   array('char'=>'Y', 'morse'=>"-.--"),
   array('char'=>'Z', 'morse'=>"--.."),
 
   array('char'=>".", 'morse'=>".-.-.-"),
   array('char'=>",", 'morse'=>"--..--"),
   array('char'=>"?", 'morse'=>"..--.."),
   array('char'=>"!", 'morse'=>"-.-.--"),
   array('char'=>"/", 'morse'=>"-..-."),
   array('char'=>"(", 'morse'=>"-.--.-"),
   array('char'=>")", 'morse'=>"-.--.-"),
   array('char'=>"&", 'morse'=>".-..."),
   array('char'=>":", 'morse'=>"---..."),
   array('char'=>";", 'morse'=>"-.-.-."),
   array('char'=>"=", 'morse'=>"-...-"),
   array('char'=>"+", 'morse'=>".-.-."),
   array('char'=>"-", 'morse'=>"-....-"),
   array('char'=>"_", 'morse'=>"..--.-"),
   array('char'=>"\"",'morse'=>".-..-."),
   array('char'=>"$", 'morse'=>"...-..-"),
   array('char'=>"@", 'morse'=>".--.-.)")
   );




do {

	echo 'Enter Sentence:' . "\n";

	$input = fgets(STDIN);

	foreach ($morseCodes as $morse => $code) {
		print_r($morse);
		if ($code['char'] == $input) {
			//var_dump(str_replace($code['char'],"", $input));



		}
	}



} while ($input = FALSE);










