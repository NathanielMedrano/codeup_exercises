<?php

// Create array to hold list of todo items
$items = array();
$alpha = "";

function list_items($list) {
        $return = '';

    foreach ($list as $key => $value) {
        $return .= $value . PHP_EOL;
    }

    RETURN $return;
}

// Get STDIN, strip whitespace and newlines, 
// and convert to uppercase if $upper is true
function get_input($upper = FALSE) {
      
    if ($upper) { 
      return strtoupper(trim(fgets(STDIN)));
   } else {
        return trim(fgets(STDIN));
    }
}

function sort_menu($alpha, &$items) {

	if ($alpha == "1") {
		sort($items);

	} elseif ($alpha == "2") {
		rsort($items);
	}
}

function addfile($alpha) {

	$handle = fopen($alpha, "r");
	$contents = fread($handle, filesize($alpha));
	echo $contents . "\n";
	fclose($handle);

	}



// The loop!
do {
    echo list_items($items);

    

    // Show the menu options
    echo '(N)ew item, (O)pen, (R)emove item, (F)ront remove, (L)ast remove, (S)ort, (Q)uit : ';
    $input = get_input(TRUE);

     // Check for actionable input
    if ($input == 'N') {
        // Ask for entry
        echo 'Enter item: (T)op or (E)nd of list: ';
        $add_item = get_input(TRUE);
        	
        	if ($add_item == 'T') {
        		array_unshift($items, get_input());

        	} elseif ($add_item == 'E') {
        		array_push($items, get_input());
        	} else {
        		get_input();
        	} 
        // Add entry to list array
        
    } elseif ($input == 'R') {
        // Remove which item?
        echo 'Enter item number to remove: ';
        // Get array key
        $key = get_input();
        $key2 = $key -1;

        // Remove from array
        unset($items[$key2]);
    } elseif ($input == 'F') {
        // Remove begginning of array
        
        array_shift($items);

 		
    }  elseif ($input == 'L') {
        // Remove begginning of array
        
        array_pop($items);

 
    } elseif ($input == 'S') {
    	//Sort how?
    	echo '(1):A-Z or (2):Z-A' . "\n";
    	//Get sort type
    	$alpha = get_input();
    	sort_menu($alpha, $items);

    } elseif ($input == 'O') {

    	echo 'Enter file path' . "\n";
    	$file_path = get_input();
    	addfile($file_path);
    }


// Exit when input is (Q)uit
} while ($input != 'Q');

// Say Goodbye!
echo "Goodbye!\n";



  