<?php
/**
 * Created by PhpStorm.
 * User: Student21
 * Date: 07.04.2019
 * Time: 12:26
 */

interface CalculatorInterface
{
    public function sum();
    public function div();
    public function mult();
    public function sub();
    public function getResult();
    public function setA($a);
    public function setB($b);
    public function getA();
    public function getB();
}