<?php

namespace App;

class HelloWorld
{
  
  public function sayHello(\DateTimeImutable $date)
  {
    echo 'Hello, ' . $date->format('j. n. Y');
  }

}
