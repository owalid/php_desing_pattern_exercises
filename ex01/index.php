<?php
include_once('QueryBuilder.php');

$query = new QueryBuilder();
echo $query->select('id')->from('user')->where('user.id = 1');