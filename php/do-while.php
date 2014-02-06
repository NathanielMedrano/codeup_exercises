<?php
$a = 0;
do {
	echo $a = $a + 2;
}	while ($a <100);

if ($a >= 100) {
	echo 'done';
}

do {
	echo $a = $a - 5;
}	while ($a >0);

echo $a + 2;

if ($a = 2) {
	do {
		echo $a = $a * $a;
	} while ($a <= 1000000);
}
?>
