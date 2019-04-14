<?php

include "Triangle.php";

try {
    $triangle = new Triangle(25,34,55);
    echo "Периметр: " . $triangle->calculatePerimeter(). "\n";
    echo "Площадь: " . $triangle->calculateSquare() . "\n";
} catch (Exception $exception) {
    echo $exception->getMessage();
}
