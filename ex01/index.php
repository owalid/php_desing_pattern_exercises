<?php
include_once('QueryBuilder.php');

$query = new QueryBuilder();
echo $query
      ->select('id', 'firstname', 'lastname')
      ->from('usr', 'user')
      ->where('u.id = 1', 'u.lastname = Dupond');
// SELECT id, firstname, lastname FROM usr AS user WHERE u.id = 1 AND u.lastname = Dupond