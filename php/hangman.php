<?php

$wg = '';
fwrite(STDOUT, 'What is your word? ');
$word = fgets(STDIN);


do {
	fwrite(STDOUT, 'What is your letter guess?');

	$guess = fgets(STDIN);
	$guess = substr($guess,0,1);
	$pos = strpos($word, $guess);

	if ($pos === false) {
		echo 'Guess Again!';
	}	else {
		echo $pos;
		}
			fwrite(STDOUT, 'Want to guess word?');

			$ans = fgets(STDIN);
			while ($ans == "y\n") {
		
	fwrite(STDOUT, 'Guess!');
	$wg = fgets(STDIN); 
	
	if ($wg == $word){
		echo 'Correct!';
	}	else {
		fwrite(STDOUT, 'Guess again!');
	}
	$ans = "";
	

	}
}	while ($wg != $word);

echo 'You Win!';