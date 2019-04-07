<?php
include "Calculator.php";

$calc = new Calculator();
$calc->setA(50);
$calc->setB(402);
$calc->mult();
echo $calc->getResult();