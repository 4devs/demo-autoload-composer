<?php

namespace NS;

class Badge
{
    protected $title;
    
    public function __construct($title)
    {
        $this->setTitle($title);
    }
    
    public function getTitle()
    {
        return $this->title;
    }
    
    public function setTitle($title)
    {
        $this->title = $title;
    }
}