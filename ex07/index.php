<?php
include_once('Emitter.php');

$emitter = Emitter::getInstance();

$emitter->on('new-user', function ($login) {
  echo 'New user: ' . $login . PHP_EOL;
});

$emitter->on('new-comment', function ($login, $message) {
  echo 'User: ' . $login . ' commented: ' . $message . PHP_EOL;
});


$emitter->emit('new-user', 'admin');
$emitter->emit('new-user', 'user');
$emitter->emit('new-comment', 'user', 'Nice !');
$emitter->emit('new-comment', 'admin', 'Thanks !');
