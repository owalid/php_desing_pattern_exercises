<?php

include_once('Cookie.php');

class SimpleCookie implements Cookie
{
  public function getType()
  {
    return 'Simple Cookie';
  }

  public function getCalories()
  {
    return 170;
  }
}