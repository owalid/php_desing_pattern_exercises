<?php

include_once('Filter.php');

interface Picture
{
  public function __construct(Filter $filter);
  public function getPicture();
}

class Portrait implements Picture
{
  protected $filter;

  public function __construct(Filter $filter)
  {
    $this->filter = $filter;
  }

  public function getPicture()
  {
    return "Portrait picture with " . $this->filter->getFilter() . PHP_EOL;
  }
}

class Landscape implements Picture
{
  protected $filter;

  public function __construct(Filter $filter)
  {
    $this->filter = $filter;
  }

  public function getPicture()
  {
    return "Landscape picture with " . $this->filter->getFilter() . PHP_EOL;
  }
}