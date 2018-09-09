<?php

namespace App;

class HelloWorld
{
  
  public function sayHello(\DateTimeImmutable $date)
  {
    echo 'Hello, ' . $date->format('j. n. Y');
  }

}
