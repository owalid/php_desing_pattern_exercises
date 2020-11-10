<?php

interface Food
{
    public function getDescription();
}

class AsianFood implements Food
{
    public function getDescription()
    {
        echo 'I am a asian food' . PHP_EOL;
    }
}

class FrenchFood implements Food
{
    public function getDescription()
    {
        echo 'I am a french food' . PHP_EOL;
    }
}