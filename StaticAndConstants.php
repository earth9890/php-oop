<?php

class Math
{

    static public function add(...$nums)
    {
        return array_sum($nums);
    }

}

echo 'Addition = ' . Math::add(1, 2, 3, 4, 5) . " ";

class Person
{
    public static $age = 1;

    public function haveBirthDay()
    {
        static::$age++;
    }
}
echo "<br>";

$neeraj = new Person;

$neeraj->haveBirthDay();
echo "Age = " . Person::$age;


class BankAccount
{
    const TAX = .09;
}
echo "<br>";

echo "Tax = " . BankAccount::TAX;



