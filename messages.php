<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');




class Person
{
    protected $name;
    public function __construct($name)
    {
        $this->name = $name;
    }
}
class Business
{

    protected $staff;
    public function __construct(Staff $staff)
    {
        $this->staff = $staff;
    }

    public function hire(Person $person)
    {
        $this->staff->add($person);
    }

    public function geStaffMembers()
    {
        return $this->staff->getMembers();
    }

}


class Staff
{
    protected $members;

    public function __construct($members = [])
    {
        $this->members = $members;
    }
    public function add(Person $person)
    {
        $this->members[] = $person;
    }

    public function getMembers()
    {
        return $this->members;
    }


}


$neeraj = new Person("Neeraj");
$staff = new Staff([new Person("Harish")]);
$new_business = new Business($staff);
$new_business->hire($neeraj);

var_dump($new_business->geStaffMembers());