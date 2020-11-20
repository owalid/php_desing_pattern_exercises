<?php
include_once('Computer.php');

class ComputerDell implements Computer
{
  protected $brand;

  public function __construct(string $brand)
  {
    $this->brand = $brand;
  }

  public function printBrand()
  {
    echo $this->brand . PHP_EOL;
  }
}