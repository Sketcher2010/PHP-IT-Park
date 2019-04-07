<?php
/**
 * Created by PhpStorm.
 * User: Student21
 * Date: 07.04.2019
 * Time: 12:14
 */
include "AnimalInterface.php";

class Dog implements AnimalInterface
{

    public function run()
    {
        echo "СОБАКЕН БЕЖИТ!";
    }

    public function sleep()
    {
        echo "Песель храпит";
    }

    public function voice()
    {
        echo "GAW!!";
    }
}