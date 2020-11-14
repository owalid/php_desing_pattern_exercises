<?php

interface Food
{
    public function getDescription();
}

class AsianFood implements Food
{
    public function getDescription()
    {
        echo 'I am an Asian food' . PHP_EOL;
    }
}

class FrenchFood implements Food
{
    public function getDescription()
    {
        echo 'I am a French food' . PHP_EOL;
    }
}