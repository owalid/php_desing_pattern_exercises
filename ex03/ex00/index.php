<?php
include_once('ComputerFactory.php');

$computor = ComputerFactory::makeComputer('Dell');
$computor->printBrand(); // Dell