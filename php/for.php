// <?php

// fwrite(STDOUT, "Count from a to b ....");

// $a = fgets(STDIN); //1
// $b = fgets(STDIN); //11

// fwrite(STDOUT, "Incrament by c...");

// $c = fgets(STDIN); //2

// $a = trim($a, "\t.");
// $b = trim($b, "\t.");
// $c = trim($c, "\t.");

// for ($i = $a; $i <= $b; $i+$c) {
// 	echo $i;
// }

// echo 'done';
// // for ($i = 1; $i <= 10; $i++) {
// //     echo $i;
// //}
// ?>

<?php

//Starting out
fwrite(STDOUT, "Welcome to my program.\n");

//Asking user for input
echo "Select a number with which you'd like to begin counting: ";

//Setting starting variable for user input, forcing INT value
$start = (int)fgets(STDIN);

//Checking if $start is an integer
if (!is_numeric($start)) {
	echo "Error!";
	exit(0);
}

//Setting ending variable for user input, forcing INT value
fwrite(STDOUT, "Choose a higher number: ");
$end = (int)fgets(STDIN);

//Checking if $end is an integer
if (!is_numeric($end)) {
	echo "Error!";
	exit(0);
}

//Setting increment, forcing INT value
fwrite(STDOUT, "Select an increment: ");
$increment = (int)fgets(STDIN);

//Checking if $increment is an integer
if (!is_numeric($increment)) {
	echo "Error!";
	exit(0);
}

//Setting default increment
if (is_null($increment)) {
	$increment = 1;
} 

//Beginning for loop
for ($i = $start; $i <= $end; $i += $increment) {
	echo $i . PHP_EOL;
}


?>