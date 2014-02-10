<?php

fwrite(STDOUT, "Count from a to b ....");

$a = fgets(STDIN);
$b = fgets(STDIN);

fwrite(STDOUT, "Incrament by c...");

$c = fgets(STDIN);

$a = trim($a, "\t.");
$b = trim($b, "\t.");
$c = trim($c, "\t.");

for ($i = $a; $i <= $b; $i++) {
	echo $i;
}

echo 'done';
// for ($i = 1; $i <= 10; $i++) {
//     echo $i;
//}
?>