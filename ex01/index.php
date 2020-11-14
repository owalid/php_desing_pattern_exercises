<?php

include_once('SimpleCookie.php');
include_once('DecoratorCookie.php');

$simpleCookie = new SimpleCookie();
echo $simpleCookie->getType() . ' ' . $simpleCookie->getCalories();
echo PHP_EOL;

$simpleCookie = new CookieMacadamia($simpleCookie);
echo $simpleCookie->getType() . ' ' . $simpleCookie->getCalories();
echo PHP_EOL;

$simpleCookie = new CookieWhiteChocolate($simpleCookie);
echo $simpleCookie->getType() . ' ' . $simpleCookie->getCalories();
echo PHP_EOL;

/*
Resultat:

Simple Cookie 170
Simple Cookie, macadamia 180
Simple Cookie, macadamia, white chocolate 200
*/