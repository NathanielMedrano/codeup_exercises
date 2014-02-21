<?php

$input = "5,10,15,25,30";

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