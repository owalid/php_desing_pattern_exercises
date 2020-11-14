<?php

include_once('Filter.php');

interface Picture
{
  public function __construct(Filter $filter);
  public function getPicture();
}

class Portrait implements Picture
{
//  Your code here
}

class Landscape implements Picture
{
// Your code here
}