# Facade

Une facade permet de ne pas rendre visible la complexité derriere une classe.

Implementé une facade `BurgerFacade` qui aura:

Un attribut:
```php
protected $burger // une instance de la classe Burger qui sera initialisé au constructeur
```

Deux methodes:
```php
getBurger() // Qui appelera les methodes qui correspondera à la confection d'un burger
eatBurger() // Qui appelera les methodes qui correspondera à l'alimentation d'un burger
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