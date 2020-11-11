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
    public function makeFood(): Food {
      return new AsianFood();
    }
    
    public function makeExpert(): FoodChef {
      return new AsianChef();
    }
  }
  
class FrenchFoodFactory implements FoodFactory
{
    public function makeFood(): Food {
      return new FrenchFood();
    }
    
    public function makeExpert(): FoodChef {
      return new FrenchChef();
    }
  // Your code here
}