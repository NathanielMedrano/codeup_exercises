<?php

for ($i = 1; $i < 101; $i++) {

	if ($i % 3 == 0) {
		echo "fizz";
	}	elseif ($i % 5 == 0) {
		echo "buzz";
	}	else {
		echo $i;
	}

}

?>