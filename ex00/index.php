<?php 
include_once('Single.php');

$single1 = Single::getInstance();
$single2 = Single::getInstance();

if ($single1 === $single2) {
  echo 'OK' . PHP_EOL;
} else {
  echo 'KO' . PHP_EOL;
}