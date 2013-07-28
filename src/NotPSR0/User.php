<?php

class User
{
    protected $name;
    protected $tasks = array();
    
    public function __construct($name)
    {
        $this->setName($name);
    }
    
    public function getName()
    {
        return $this->name;
    }
    
    public function setName($name)
    {
        $this->name = $name;
    }
    
    public function getTasks()
    {
        return $this->tasks;
    }
    
    public function addTask(Task $task)
    {
        $this->tasks[] = $task;
    }
}