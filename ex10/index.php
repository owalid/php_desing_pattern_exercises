<?php
include_once('Door.php');
include_once('Security.php');

$door = new Security(new BankDoor());
$door->open('invalid');

$door->open('$ecr@t');
$door->close();