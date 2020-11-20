# ex02 - Facade

Une façade permet de ne pas rendre visible la complexité derrière une classe.

Implémenter une façade `BurgerFacade` qui aura:

Un attribut:
```php
protected $burger
// Une instance de la classe Burger qui sera initialisée au constructeur
```

Deux methodes:
```php
public function getBurger()
// Qui appellera les méthodes qui correspondent à la confection d'un burger (cf Burger.php)

public function eatBurger()
// Qui appellera les méthodes qui correspondent à l'alimentation d'un burger (cf. Burger.php)
```

Vous devez obtenir la sortie suivante:
```
Bread ok !
The steak is cooking !
Onion, tomatoes, salads
Ready to be served !
It's beautiful burger
yummmm
The table was dirty, It's clean now !
```
