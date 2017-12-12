<?php

// var_dump($argv);   //Shows all the command line args in $argv array.


// Solution using foreach loop
/*
$sum = 0;
$count = 0;
foreach($argv as $arg) {
    if ( $count != 0) {
        $sum = $sum + $arg;        
        $count++;
    }
    $count++;
}

echo $sum;
*/


//Solution using for loop


$sum = 0;
for($i = 0; $i < count($argv); $i++) {
    $sum = $sum + $argv[$i+1];
}

echo $sum;
