<?php

interface CarInterface {
    public function start();
    public function stop();
    public function openDoor();
    public function closeDoor();
    public function setSpeed($number);
    public function run();
    public function carBreak();
}

