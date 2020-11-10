<?php

class FbMessageManager {
  public function printMessageFb($msg) {
    echo $msg;
  }

  public function deleteMessageFb($msg) {
    echo 'This message: ' . $msg . ' is deleted.';
  }
}