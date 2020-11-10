<?php
include_once('FoodFactory.php');

$woodenFactory = new AsianFoodFactory();

$door = $woodenFactory->makeFood();
$expert = $woodenFactory->makeExpert();

$door->getDescription();  // Output: I am a wooden door
$expert->getDescription(); // Output: I can only fit wooden doors

// Idem pour le Factory de porte en fer
$ironFactory = new FrenchFoodFactory();

$door = $ironFactory->makeFood();
$expert = $ironFactory->makeExpert();

$door->getDescription();  // Output: I am an iron door
$expert->getDescription(); // Output: I can only fit iron doors