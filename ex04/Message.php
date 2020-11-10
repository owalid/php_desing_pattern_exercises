<?php
require_once('MessageManagerInterface.php');

class Message {
  public function printMessage(MessageManagerInterface $msgManager, string $msg) {
    $msgManager->printMsg($msg);
  }
}