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

function comp_array($needles, $haystack) {

	$number_matches = 0;
	foreach ($needles as $needle => $value) {
		$result = array_search($needle, $haystack);
			if (is_numeric($result)) {
				$number_matches++;
			}
	}
	print_r($number_matches);
	return $number_matches;
}

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

	echo comp_array($compare, $names);
	
	//var_dump($result);
}	while ($search == NULL); 



