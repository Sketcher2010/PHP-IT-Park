<?php

include "Student.php";

// Владимир
$student5 = new Student();
$student5->setName("Владимир");
$student5->setCountOfPrograms(1);

$student5->increaseCountOfPrograms();

$student6 = new Student();
$student6->setName("Эгзаметдин");
$student6->setCountOfPrograms(2);
$student6->increaseCountOfPrograms();
$student6->increaseCountOfPrograms();
$student6->increaseCountOfPrograms();


echo $student5->getCountOfPrograms()."\n";
echo $student6->getCountOfPrograms();



