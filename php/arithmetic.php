<?php
//Set Functions

//Establish Error Message
function errmess() {
	echo "Both must be numbers\n";

}

function add($a, $b) {
    if (is_numeric($a) && is_numeric($b)){
    return ($a + $b) . "\n";
	} else {
		errmess();

	}
}

function sub($a, $b) {
	if (is_numeric($a) && is_numeric($b)){
   return ($a - $b) . "\n";
	} else {
		errmess();
	}
}

function multi($a, $b) {
	if (is_numeric($a) && is_numeric($b)){
    return ($a * $b) . "\n";
	} else {
		errmess();
	}
}

function divide($a, $b) {
	if ($b == 0) {
		//return false;
		echo "Not divisable by 0\n";
	} elseif  (is_numeric($a) && is_numeric($b)){
    return ($a / $b) . "\n";
	} else {
		errmess();
	}
}

function mod($a, $b) {
	if (is_numeric($a) && is_numeric($b)){
    return ($a % $b) . "\n";
	} else {
		errmess();
	}
}

echo add(9,8);

echo sub(9,8);

echo multi(9,8);

echo divide(9,8);

echo mod(9,8);

echo divide(9,0);

echo add(9,'five');
?>