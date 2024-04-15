<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');

class Task
{

    public $description;
    public $completed = false;

    public function __construct($description)
    {
        $this->description = $description;
    }

    public function completed()
    {
        $this->completed = true;
    }


}
$task = new Task("Learn OOP");
echo var_dump($task->description);

var_dump($task->completed);
$task->completed();
var_dump($task->completed);



?>