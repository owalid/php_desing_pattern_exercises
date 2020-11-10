<?php
class BurgerFacade
{
    protected $burger;

    public function __construct(Burger $burger)
    {
        $this->burger = $burger;
    }

    public function getBurger()
    {
        $this->burger->getBread();
        $this->burger->cookSteak();
        $this->burger->putTheVegetables();
        $this->burger->serve();
    }

    public function eatBurger()
    {
        $this->burger->unpack();
        $this->burger->eat();
        $this->burger->clearTheTable();
    }
}