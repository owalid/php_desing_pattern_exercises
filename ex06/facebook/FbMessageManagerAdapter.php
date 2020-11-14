<?php
include_once(__DIR__ . '/../MessageManagerInterface.php');
include_once('FbMessageManager.php');

class FbMessageManagerAdapter implements MessageManagerInterface {

  private $fbMessageManager;

  public function __construct(FbMessageManager $fbMessageManager)
  {
    $this->fbMessageManager = $fbMessageManager;
  }

  public function printMessage($msg)
  {
    $this->fbMessageManager->printMessageFb($msg);
  }
}