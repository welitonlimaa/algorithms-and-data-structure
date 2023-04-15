<?php

// Create an algorithm that runs through a one-dimensional array containing 
// letters and numbers: [ “a”, 10, “b”, “hola”, 122, 15]:
//  Get an array containing just the letters
//  Get an array containing just the numbers
//  Get the highest number from the array above


$elements = ["a", 10, "b", "hola", 122, 15];

$numbers = [];
$letters = [];

foreach ($elements as $element) {
    if (is_string($element)) {
        array_push($letters, $element);
    } else {
        array_push($numbers, $element);
    }
}

$highest = max($numbers);

echo "<br><br><br>";

echo "One-dimensional ";
print_r($elements);

echo "<br><br>";

echo "Array containing just the numbers: ";
print_r($numbers);

echo "<br>";

echo "Highest number: " . $highest;

echo "<br><br>";

echo "Array containing just the letters: ";
print_r($letters);
