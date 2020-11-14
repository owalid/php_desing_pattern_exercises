<?php
include_once(__DIR__ . '/../MessageManagerInterface.php');

class BasicMessageManager implements MessageManagerInterface {
  public function printMessage($msg) {
    echo $msg . PHP_EOL;
  }
}