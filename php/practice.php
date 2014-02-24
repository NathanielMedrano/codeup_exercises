<?php


$admin = 10;
$ad = '10';

if ($admin === 10) {
	echo "Type and value" . PHP_EOL;
	var_dump($admin);
}

if ($ad == 10) {
	echo "Value checked" . PHP_EOL;
	var_dump($ad);
} else {
	echo "type different" . PHP_EOL;
	var_dump($ad);
}