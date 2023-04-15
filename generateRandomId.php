<?php

// 3. Create an algorithm that generates the following random ID pattern: XXXX-AAAA-BBBB-CCCC
// Where XXXX, AAAA, BBBB and CCCC patterns are random alphanumeric:
//  The default is a string: "XXXX-AAAA-BBBB-CCCC"
//  The result must be stored in a variable. For example:
//      - $id = generarId()
//      - id is ~ abc1-bb12-234a-bcc2


function generateId($patterns)
{
    $random_id = "";
    $length = count($patterns);
    foreach ($patterns as $pattern) {
        $random_id .= generateAlphanumeric($pattern);

        if ($pattern != $patterns[$length - 1]) {
            $random_id .= "-";
        }
    }

    return $random_id;
}

function generateAlphanumeric($pattern)
{
    $alphanumeric = "";
    $i = 0;
    $elementsNumber = 0;
    while ($i < strlen($pattern)) {
        $order = rand(0, 1);
        if ($order == 1 && $elementsNumber <= 3) {
            $alphanumeric .= rand(1, 9);
            $elementsNumber += 1;
        } else {
            $alphabet = "abcdefghijklmnopqrstuvwxyz";
            $letter = rand(0, (strlen($pattern) - 1));
            $alphanumeric .= $alphabet[$letter];
        }
        $i += 1;
    }


    return $alphanumeric;
}

$patterns = "XXXX-AAAA-BBBB-CCCC";

$array_patterns = explode("-", $patterns);

$id = generateId($array_patterns);
echo "<br><br>";
echo "id is ~ " . $id;
