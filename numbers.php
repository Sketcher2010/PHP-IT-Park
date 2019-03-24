<?php
$numbers = array(1, 2, 3, 4, 5);

for ($i = 0; $i < (int)count($numbers)/2; $i++) {
    $a = $numbers[$i];
    $numbers[$i] = $numbers[count($numbers) - $i - 1];
    $numbers[count($numbers) - $i - 1] = $a;
}

foreach ($numbers as $number) {
    echo $number;
}