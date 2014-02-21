<?php

// Create array to hold list of todo items
$items = array();

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
      return (trim(fgets(STDIN)));
   } else {
        return (strtoupper($upper));
    }
}

// The loop!
do {
    // Iterate through list items
    foreach ($items as $key => $item) {
        // Display each item and a newline
        echo "[{$key}] {$item}\n";
    }

    // Show the menu options
    echo '(N)ew item, (R)emove item, (Q)uit : ';
    $input = trim(fgets(STDIN));
    
    // Check for actionable input
    if ($input == 'N') {
        // Ask for entry
        echo 'Enter item: ';
        // Add entry to list array
        $items[] = trim(fgets(STDIN));
    } elseif ($input == 'R') {
        // Remove which item?
        echo 'Enter item number to remove: ';
        // Get array key
        $key = trim(fgets(STDIN));
        $key2 = $key -1;

        // Remove from array
        unset($items[$key2]);
    }
// Exit when input is (Q)uit
} while ($input != 'Q');

// Say Goodbye!
echo "Goodbye!\n";

// Exit with 0 errors
//exit(0);


