<?php

include "CalculatorInterface.php";

class Calculator implements CalculatorInterface
{
    private $a;
    private $b;
    private $result;

    public function sum()
    {
        $this->result = $this->a + $this->b;
    }

    public function div()
    {
        $this->result = $this->a / $this->b;
    }

    public function mult()
    {
        $this->result = $this->a * $this->b;
    }

    public function sub()
    {
        $this->result = $this->a - $this->b;
    }

    public function getResult()
    {
        return $this->result;
    }

    public function setA($a)
    {
        $this->a = $a;
    }

    public function setB($b)
    {
        $this->b = $b;
    }

    public function getA()
    {
        return $this->a;
    }

    public function getB()
    {
        return $this->b;
    }
}