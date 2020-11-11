<?php
include_once('Cookie.php');

class CookieMacadamia implements Cookie
{
  protected $coffee;

  public function __construct(Cookie $coffee)
  {
      $this->coffee = $coffee;
  }

  public function getCalories()
  {
      return $this->coffee->getCalories() + 10;
  }

  public function getType()
  {
      return $this->coffee->getType() . ', macadamia';
  }

}

class CookieWhiteChocolate implements Cookie
{
  protected $coffee;

  public function __construct(Cookie $coffee)
  {
      $this->coffee = $coffee;
  }

  public function getCalories()
  {
      return $this->coffee->getCalories() + 20;
  }

  public function getType()
  {
      return $this->coffee->getType() . ', white chocolate';
  }
   
}
