<?php
include_once('ComputerFactory.php');

$computor = ComputerFactory::makeComputor('Dell');
$computor->printBrand();