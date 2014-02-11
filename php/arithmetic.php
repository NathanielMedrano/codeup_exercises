<?php

function add($a, $b) {
    if (is_numeric($a) && is_numeric($b)){
    echo ($a + $b) . "\n";
	} else {
		echo "Both must be numbers";
	}
}

function sub($a, $b) {
	if (is_numeric($a) && is_numeric($b)){
   echo ($a - $b) . "\n";
	} else {
		echo "Both must be numbers";
	}
}

function multi($a, $b) {
	if (is_numeric($a) && is_numeric($b)){
    echo ($a * $b) . "\n";
	} else {
		echo "Both must be numbers";
	}
}

function divide($a, $b) {
	if ($b == 0) {
		echo "Not divisable by 0";
	} elseif  (is_numeric($a) && is_numeric($b)){
    echo ($a / $b) . "\n";
	} else {
		echo "Both must be numbers";
	}
}

function mod($a, $b) {
	if (is_numeric($a) && is_numeric($b)){
    echo ($a % $b) . "\n";
	} else {
		echo "Both must be numbers";
	}
}

add(9,8);

sub(9,8);

multi(9,8);

divide(9,8);

mod(9,8);

divide(9,0);

add(9,five);
?>