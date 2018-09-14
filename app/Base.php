<?php

namespace App;

class Base 
{

    /** @var int */
    protected $number;

    public function __construct(int $number)
    {
        $this->number = $number;
    }    
}