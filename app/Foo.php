<?php

namespace App;

class Foo
{
    public function bar(\DateTimeImmutable $date)
    {
        echo $date->format('d/m/Y');
    }
}