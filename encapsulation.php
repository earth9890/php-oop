<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');

class Person
{

    private $age;
    private $name;


    public $email;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }
    function setAge($age)
    {
        $this->age = $age * 12;
    }

    function getAge()
    {
        return $this->age;
    }


    function setName($name)
    {
        $this->name = $name;
    }
    function getName()
    {
        return $this->name;
    }
}

$neeraj = new Person("Neeraj", 25);
echo "Before Setter <br>";
echo $neeraj->getAge() . " Months<br>";
echo $neeraj->getName() . "<br>";

$neeraj->setAge(30);
$neeraj->setName("NM");
echo "After Setter <br>";
echo $neeraj->getAge() . " Months<br>";
echo $neeraj->getName() . "<br>";

