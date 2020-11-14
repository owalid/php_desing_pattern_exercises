<?php
include_once('Computer.php');
include_once('ComputerDell.php');

class ComputerFactory
{
    // Your code here
    public static function makeComputer($brand): Computer
    {
        return new ComputerDell($brand);
    }
}