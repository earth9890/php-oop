<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');



abstract class Shape
{
    protected $color;

    public function __construct($color = "red")
    {
        $this->color = $color;
    }

    abstract protected function getArea();

}

class Square extends Shape
{
    protected $length = 4;
    public function getArea()
    {
        return pow($this->length, 2);
    }
}

class Triangle extends Shape
{

    private $base = 4;
    private $height = 5;


    public function getArea()
    {
        return 0.5 * $this->base * $this->height;
    }
}

class Circle extends Shape
{
    private $radius = 5;
    public function getArea()
    {
        return pi() * pow($this->radius, 2);
    }
}
$result = (new Square)->getArea();
echo "Area of Square " . $result . "<br>";
$result = (new Triangle)->getArea();
echo "Area of Triangle " . $result . "<br>";

$result = (new Circle)->getArea();
echo "Area of Circle " . $result . "<br>";
