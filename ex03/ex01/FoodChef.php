<?php

interface FoodChef
{
    public function getDescription();
}

class AsianChef implements FoodChef
{
    public function getDescription()
    {
        echo 'I am an Asian chef, I can only do asian food' . PHP_EOL;
    }
}

class FrenchChef implements FoodChef
{
    public function getDescription()
    {
        echo 'I am a French chef, I can only do french food' . PHP_EOL;
    }
}