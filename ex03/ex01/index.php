<?php
include_once('FoodFactory.php');

$woodenFactory = new AsianFoodFactory();

$door = $woodenFactory->makeFood();
$expert = $woodenFactory->makeExpert();

$door->getDescription(); 
$expert->getDescription();

// Idem pour le Factory de porte en fer
$ironFactory = new FrenchFoodFactory();

$door = $ironFactory->makeFood();
$expert = $ironFactory->makeExpert();

$door->getDescription(); 
$expert->getDescription();