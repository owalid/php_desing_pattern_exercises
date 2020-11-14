<?php
include_once('Message.php');
include_once('basic/BasicMessageManager.php');
include_once('facebook/FbMessageManagerAdapter.php');

$basicMessageManager = new BasicMessageManager();
Message::printMessage($basicMessageManager, 'print "hello world" by basic');

$fbMsgManager = new FbMessageManager();
$adapter = new FbMessageManagerAdapter($fbMsgManager);
Message::printMessage($adapter, 'print "hello world" by adapter');