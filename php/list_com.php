<?php

//Array of famous phys
$physicists = ['Gordon Freeman','Samantha Carter','Sheldon Cooper','Quinn Mallory','Bruce Banner','Tony Stark'];
  
// List of famous peeps
$physicists_string = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';

// Converts array into list n1, n2, ..., and n3
function humanized_list($array) {
	return implode("|", $array);
}

// Converts string into list n1, n2, ..., and n3
function mechanize_list($string) {
	return explode(", ", $string);
}

function get_input($alpha) {
      
    if ($alpha = TRUE) { 
      return strtoupper(trim(fgets(STDIN)));
   } 
}

function sort_menu($alpha, &$array) {

	if ($alpha == "1") {
		return sort($array);
		
	} elseif ($alpha == "2") {
		return;
	}
}

	echo 'Would you like to sort array? (1)Yes or (2)No ';
	$alpha = get_input(TRUE);
	sort_menu($alpha, $physicists);


$last = array_pop($physicists);

$push = array_push($physicists, 'and');

//$push = array_push($physicists, $last);
// Humanize that list

$famous_fake_physicists = humanized_list($physicists);
$famous_fake_physicists = str_replace("|", ", ", $famous_fake_physicists);

$famous_mech_physicists = mechanize_list($physicists_string);

// Output sentence
echo "Some of the most famous fictional theoretical physicists are " . "$famous_fake_physicists" . " $last" . ".";





?>