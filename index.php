<?php

/*

Linear search
----------------

worst case:   steps = $valuesNum
perfect case: steps = 1

*/

$values = array(5, 6, 4, 87, 9, 0, 1, 3); // the array that we will search in 
$valuesNum = count($values); // number of values
$wantedValue = 3; // value that we will search for
$i = 0;

var_dump ($values);
echo "<br>wanted value is $wantedValue <br>"; // printing wanted value

while ($i < $valuesNum) {
    $currentValue = $values[$i];
    if($currentValue == $wantedValue) { // here we found the value
        echo "this value index in the array is $i";
        $i = $valuesNum; // make $i = $values num to stop the loop
    }
    else {
        if ($i == $valuesNum-1) { // if this the last value in the arr
            echo "Wanted value is not in the array!";
            $i++;
        }
        else {
            $i++; // increase the value of $i
        }
    }
}