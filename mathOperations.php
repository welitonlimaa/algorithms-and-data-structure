<?php

// Create a hashmap (or a simple object in PHP) that contains the elementary 
// functions of addition, subtraction, multiplication, and division.
//      Take into account that the division must not allow 0 dividend
//      The sum function allows an array as an input parameter and adds all its elements.
//      The subtraction function allows an array as an input parameter and subtracts all its elements.
//      Multiplication Function - Ditto
//      The division function accepts two parameters: a and b.


class MathOperations
{
    public function addition($numbers)
    {
        return array_reduce($numbers, function ($acc, $number) {
            return $acc + $number;
        });
    }

    public function subtraction($numbers)
    {
        return array_reduce($numbers, function ($acc, $number) {
            return $acc - $number;
        });
    }

    public function multiply($numbers)
    {
        return array_reduce($numbers, function ($acc, $number) {
            return $acc *= $number;
        }, 1);
    }

    public function division($a, $b)
    {
        if ($b === 0) return "Divisor cannot be zero, choose another number!";

        return $a / $b;
    }
}

$numbers = [12, 11, 9, 8];

$operations = new MathOperations();

$sum = $operations->addition($numbers);

$subtraction = $operations->subtraction($numbers);

$multiply = $operations->multiply($numbers);

echo "<br><br><br>";

echo "Math Operations with ";
print_r($numbers);

echo "<br><br>";
echo "Sum: " . $sum . "<br><br>";

echo "Subtraction: " . $subtraction . "<br><br>";

echo "Multiply: " . $multiply . "<br><br>";

$a = 8;
$b = 2;
$division = $operations->division($a, $b);
echo "Success division " . $a . " / " . $b . " : " . $division . "<br><br>";

$a = 12;
$b = 0;
$division = $operations->division($a, $b);
echo "Failed division " . $a . " / " . $b . " : " . $division . "<br><br>";
