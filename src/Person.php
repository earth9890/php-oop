<?php

namespace App;

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