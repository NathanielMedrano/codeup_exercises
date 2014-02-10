<?php

for ($i =1 ; $i <= 100; $i++) {
	if ($i % 2 == 0) {
		echo $i;
	} elseif ($i > 10) {
		break;
	}

}