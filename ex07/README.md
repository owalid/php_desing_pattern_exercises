# Facade

Une facade permet de ne pas rendre visible la complexité derriere une classe.

Implementé une facade `BurgerFacade` qui aura:

Un attribut:
```php
$burger // de type Burger qui contiendra une instance de buger qui sera initialisé au constructeur
```

Deux methodes:
```php
getBurger() // Qui sera une methodes qui appelera les methodes qui correspondera à la confection d'un burger
eatBurger() // Qui sera la facade es qui appelera les methodes qui correspondera à l'alimentation d'un burger
```