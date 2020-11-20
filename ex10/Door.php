<?php

interface Door
{
    public function open();
    public function close();
}

class BankDoor implements Door
{
    public function open()
    {
        echo "Opening bank door" . PHP_EOL;
    }

    public function close()
    {
        echo "Closing the bank door" . PHP_EOL;
    }
}