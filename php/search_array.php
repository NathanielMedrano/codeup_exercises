<?php

// first names
$names = ['Tina', 'Dana', 'Mike', "Amy", 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

function val_arr($array, $input) {
	
	foreach ($array as $key => $value) {
		if ($value === $input){
			return true;
		} else
			return false;
	}
	//in_array($array, $input);
}

// function comp_array($array1, $array2) {

// 	foreach ($array1 as $key => $value) {

// 	}
// }

do {
	//prompt search
	fwrite(STDOUT, 'Search: ' . PHP_EOL);

	$search = trim(fgets(STDIN));

	
	$result = val_arr($names, $search);

	if ($result === true) {
		echo "True\n";
	}	else {
		echo "False\n";
	}
	
	//var_dump($result);
}	while ($search == NULL); 




