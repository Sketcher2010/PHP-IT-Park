<?php
include "TriangleInterface.php";

class Triangle implements TriangleInterface
{
    private $a, $b, $c;

    public function __construct($a, $b, $c)
    {
        if ($a > 0 && $b > 0 && $c > 0) {
            if ($a + $b > $c) {
                if ($c > $b && $c > $a) {
                    $this->a = $a;
                    $this->b = $b;
                    $this->c = $c;
                } else {
                    throw new Exception("Третий аргумент должен быть самым большим!");
                }
            } else {
                throw new Exception("Сумма меньших сторон должна быть больше третьей стороны!\n");
            }
        } else {
            throw new Exception("Стороны должны быть больше нуля!\n");
        }
    }

    public function calculatePerimeter()
    {
        return $this->a + $this->c + $this->b;
    }

    public function calculateSquare()
    {
        $pp = $this->calculatePerimeter() / 2;
        return sqrt(
            $pp *
            ($pp - $this->a) *
            ($pp - $this->b) *
            ($pp - $this->c)
        );
    }
}