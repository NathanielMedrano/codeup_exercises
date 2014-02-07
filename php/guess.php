<?php 
// Dump arg count
var_dump($argc);
// Dump arg vars
var_dump($argv);
// Exit with 0 errors
exit(0);
//Define Variables
$num = mt_rand(1,100);
$try = 0;


do {
//Prompt question
fwrite(STDOUT, 'What is your guess? ');
$guess = fgets(STDIN);
//Give hints
	if ($guess > $num) {
		echo "Lower ";
	}	elseif ($guess < $num) {
		echo "Higher ";
	}	elseif ($guess == $num) {
		echo "Good Guess!";
	}
//Number of tries
	echo "Number of Tries: " . $try++ ;

} while ($guess != $num);
//Finish game
echo "\nGood Game!";

