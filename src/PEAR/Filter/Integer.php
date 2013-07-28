<?php

class Filter_Integer
{
    public function filter($var)
    {
        return filter_var($var, FILTER_VALIDATE_INT);
    }
}