<?php
include_once('Emitter.php');

$emitter = Emitter::getInstance();

$emitter->on('new-user', function ($login) {
  echo 'New user: ' . $login;
});

$emitter->on('new-comment', function ($login, $message) {
  echo 'User: ' . $login . ' commented: ' . $message;
});


$emitter->emit('new-user', 'Root');
$emitter->emit('new-user', 'User1');
$emitter->emit('new-comment', 'User1', 'Nice !');
$emitter->emit('new-comment', 'Root', 'Thanks !');
