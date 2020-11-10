<?php

include_once('SimpleCookie.php');
include_once('CookieMacadamia.php');
include_once('CookieWhiteChocolate.php');
include_once('CookieBlackChocolate.php');

$simpleCookie = new SimpleCookie();
echo $simpleCookie->getType(); // 170
echo $simpleCookie->getCalories(); // Cookie

$simpleCookie = new CookieMacadamia($simpleCookie);
echo $simpleCookie->getType(); // 200
echo $simpleCookie->getCalories(); // Cookie with macadamia

$simpleCookie = new CookieWhiteChocolate($simpleCookie);
echo $simpleCookie->getType(); // 250
echo $simpleCookie->getCalories(); // Cookie with white chocolate

$simpleCookie = new CookieBlackChocolate($simpleCookie);
echo $simpleCookie->getType(); // 150
echo $simpleCookie->getCalories(); //Cookie with black chocolate
