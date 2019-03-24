<?php

$arr = array(
    array("number" => 4, "name" => "four"),
    array("number" => 6, "name" => "six"),
    array("number" => 2, "name" => "two"),
    array("number" => 7, "name" => "seven"),
    array("number" => 0, "name" => "zero"),
    array("number" => 5, "name" => "five"),
    array("number" => 1, "name" => "one"),
);
// bubble sort
for ($i = 0; $i < count($arr); $i++) {
    for ($j = 0; $j < count($arr) - $i - 1; $j++) {
        if ($arr[$j]["number"] > $arr[$j + 1]["number"]) {
            $a = $arr[$j];
            $arr[$j] = $arr[$j + 1];
            $arr[$j + 1] = $a;
        }
    }
}


foreach ($arr as $number) {
    echo $number["number"] . " " . $number["name"] . "\n";
}