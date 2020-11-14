<?php
require_once('MessageManagerInterface.php');

class Message {
  public static function printMessage(MessageManagerInterface $msgManager, string $msg) {
    $msgManager->printMessage($msg);
  }
}