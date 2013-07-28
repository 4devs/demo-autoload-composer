<?php

class Task
{
    protected $title;
    protected $description;
    
    public function __construct($title, $description = '')
    {
        $this->setTitle($title);
        $this->setDescription($description);
    }
    
    public function __toString()
    {
        return $this->description ? $this->title . ' ' . $this->description : $this->title;
    }
    
    public function getTitle()
    {
        return $this->title;
    }
    
    public function setTitle($title)
    {
        $this->title = $title;
    }
    
    public function getDescription()
    {
        return $this->description;
    }
    
    public function setDescription($desc)
    {
        $this->description = $desc;
    }
    
}