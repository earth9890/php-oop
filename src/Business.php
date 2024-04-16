<?php
namespace App;

error_reporting(E_ALL);
ini_set('display_errors', '1');

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

