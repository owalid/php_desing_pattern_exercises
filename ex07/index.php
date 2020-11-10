<?php
include_once('BurgerFacade.php');
include_once('Burger.php');

$burger = new BurgerFacade(new Burger());

$burger->getBurger();
// retourne:
/*
Bread ok !
The steak is cooking !
Onion, tomatoes, salads
Ready to be served !
*/

$burger->eatBurger();
// retourne:
/*
It's beautiful burger
yummmm
It's clean now !
*/