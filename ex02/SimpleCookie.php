<?php

include_once('Cookie.php');

class SimpleCookie implements Cookie {
  public function getType() {
    return 'Cookie';
  }

  public function getCalories() {
    return 170;
  }
}