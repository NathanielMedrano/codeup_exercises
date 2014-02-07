<?php 

$num = mt_rand(1,100);
$try = 0;


do {

fwrite(STDOUT, 'What is your guess? ');
$guess = fgets(STDIN);

if ($guess > $num) {
	echo "Lower ";
}	elseif ($guess < $num) {
	echo "Higher ";
}	elseif ($guess == $num) {
	echo "Good Guess!";
}

echo "Number of Tries: " . $try++ ;

} while ($guess != $num);

echo "\nGood Game!";

?>