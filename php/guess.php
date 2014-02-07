<?php 
// If there are 2 args + filename
if ($argc == 3) {
    // Echo them out directly
    echo "arg1 is {$argv[1]} and arg2 is {$argv[2]}\n";
}
//Define Variables
$num = mt_rand($argv[1],$argv[2]);
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

