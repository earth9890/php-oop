<?php
namespace App;

error_reporting(E_ALL);
ini_set('display_errors', '1');


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