<?php

namespace App;

class Foo
{
    public function bar(\DateTimeImutable $date)
    {
        echo $date->format('d/m/Y');
    }
}