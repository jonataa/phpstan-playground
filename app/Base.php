<?php

namespace App;

class Base 
{

    /** @var int */
    protected $number;

    /** @var int */
    protected $double;

    public function __construct(int $number)
    {
        $this->number = $number;
        $this->double = $number * 2;
    }    
}