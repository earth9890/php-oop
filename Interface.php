<?php

interface Logger
{

    public function execute($message);
}


class LogToFile implements Logger
{

    public function execute($message)
    {
        var_dump('Log the message to a file: ' . $message);
    }
}

class LogToDataBase implements Logger
{
    public function execute($message)
    {
        var_dump('Log the message to a database: ' . $message);
    }
}

class UserController
{
    protected $logger;
    public function __construct(Logger $logger)
    {
        $this->logger = $logger;
    }

    public function show()
    {
        $user = "Neeraj";
        $this->logger->execute($user);
    }
}


$useController = new UserController(new LogToDataBase);
$useController->show();