<?php

include "CarInterface.php";

class Car implements CarInterface
{
    private $gear = 0;
    private $engine = "off";
    private $door = "close";
    private $moving = false;

    public function start()
    {
        if($this->engine == "off" && $this->gear == 0) {
            echo "Запуск двигателя!\n";
            $this->engine = "on";
        }
    }

    public function openDoor()
    {
        if($this->door == "close" && !$this->moving) {
            echo "Открытие двери\n";
            $this->door = "open";
        }
    }

    public function closeDoor()
    {
        if($this->door == "open") {
            echo "Закрытие двери\n";
            $this->door = "close";
        }
    }

    public function setSpeed($number)
    {
        if($this->engine == "on") {
            $this->gear = $number;
        }
    }

    public function run()
    {
        if(
            $this->engine == "on" &&
            $this->gear != 0 &&
            $this->door = "close"
        ) {
            echo "Начало движения\n";
            $this->moving = true;
        }
    }

    public function carBreak()
    {
        if($this->moving) {
            echo "Остановка автомобиля\n";
            $this->moving = false;
        }
    }

    public function stop()
    {
        if(!$this->moving && $this->engine == "on") {
            echo "Остановка двигателя\n";
            $this->engine = "off";
        }
    }
}