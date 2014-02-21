<?php

items = array(
	'Take out the trash',
	'Mow the yard',
	'wash dishes');

	function list_items($list) {

		$result = '';

		//loop through list
		foreach($list as $key => $value){

			$newIndex = $key + 1;
			$result .= "[" . $newIndex . "] $value" . PHP_EOL;
		}

		return $result;
	}


	sort($names);

	print_r($names);


	//////list commas

	function humanized_list($input, $input = false) {

		if ($sort) {
			sort($explode);
		}

		$exploded = explode(', ', $input);
		$last = array_pop($exploded);
		return implode(', ', $exploded) . ", and $last";

	}

	$famous_fake_physicists = humanized_list($physicists_string, true);