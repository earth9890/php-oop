<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');

class Task
{

    public $description;


    public function __construct($description)
    {
        $this->description = $description;
    }


}
$task = new Task("Learn OOP");
echo var_dump($task->description);


?>
