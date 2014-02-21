<?php


//$input = "5,10,15,25,30";

// function get_input($upper = FALSE) {
      
//     if ($upper) { 
//       return strtoupper(trim(fgets(STDIN)));
//    } else {
//         return trim(fgets(STDIN));
//     }
// }

// echo "Enter Sequence with only ',' between numbers" . PHP_EOL;

// array_push($items, get_input()); 

// $in_arr = array();

// //$in_arr = explode(",", $input);

// $seq_arr = array();

// $start = $in_arr[0];

// $seq = $in_arr[2] - $in_arr[1] ;

// $starts = intval($start);
// $end = intval(end($in_arr));



// for ($i = $starts; $i <= $end; $i += $seq) {

// array_push($seq_arr, $i);

// } 

//  $result = array_diff($seq_arr, $in_arr);

// intval($result);

// var_dump($result);

 $input = "1,2,3,4,6,7,8";
// $input = "5,10,15,25,30";
// $input = "2,5,8,11,17,20";
// $input = "4,8,12,20,24,28";

$in_arr = explode(",", $input);

$seq_arr = array();

$start = $in_arr[0];

$seq = $in_arr[2] - $in_arr[1] ;

$starts = intval($start);

$end = intval(end($in_arr));

for ($i = $starts; $i <= $end; $i += $seq) {

array_push($seq_arr, $i);

} 

 $result = array_diff($seq_arr, $in_arr);

intval($result);

var_dump($result);

?>