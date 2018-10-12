<?php

namespace App;

class Base 
{

    /** @var int */
    protected $number;

    /** @var int */
    protected $doubleNumber;

    public function __construct(int $number)
    {
        $this->number = $number;
        $this->doubleNumber = $this->number * 2;
    }    
}