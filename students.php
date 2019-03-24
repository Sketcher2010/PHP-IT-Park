<?php

$Ilya = array(
    "age" => 13,
    "birthDay" => "07.06.2005",
    "name" => "Илья",
    "experience" => 1,
    "isMan" => true,
);
$Andrey = array(
    "age" => 16,
    "birthDay" => "06.05.2002",
    "name" => "Андрей",
    "experience" => 4,
    "isMan" => true,
);
$Katya = array(
    "age" => 15,
    "birthDay" => "23.03.2004",
    "name" => "Катя",
    "experience" => 2,
    "isMan" => false,
);
$Kamil = array(
    "age" => 15,
    "birthDay" => "12.04.2003",
    "name" => "Камиль",
    "experience" => 1,
    "isMan" => true,
);
$Sasha = array(
    "age" => 14,
    "birthDay" => "04.12.2004",
    "name" => "Саша",
    "experience" => 1,
    "isMan" => true,
);

$Viktor = array(
    "age" => 22,
    "birthDay" => "21.11.1996",
    "name" => "Виктор",
    "experience" => 9,
    "isMan" => true,
    "students" => array(
        $Andrey, $Katya, $Kamil, $Ilya, $Sasha
    )
);

foreach ($Viktor["students"] as $student) {
    echo $student["name"]." ".$student["age"]."\n";
}
