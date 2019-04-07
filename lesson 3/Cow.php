<?php

include "AnimalInterface.php";
include "Animal.php";

class Cow extends Animal implements AnimalInterface
{
    public function run()
    {
        echo "КОРОВА БЕЖИТ!!!! ААААААА";
    }

    public function sleep()
    {
        echo "Ура, корова спит!";
    }

    public function voice()
    {
        echo "MOOOOOO";
    }
}