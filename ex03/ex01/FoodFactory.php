<?php
include_once('Food.php');
include_once('FoodChef.php');

interface FoodFactory
{
    public function makeFood(): Food;
    public function makeExpert(): FoodChef;
}

class AsianFoodFactory implements FoodFactory
{
    // Your code here
}

class FrenchFoodFactory implements FoodFactory
{
  // Your code here
}