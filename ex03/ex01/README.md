# ex03 - Abstract factory

Crée une interface `FoodFactory`

Qui contiendra deux définitions de méthodes:
```php
public function makeFood(): Food;
public function makeExpert(): FoodChef;
```

Créé ensuite deux classes `AsianFoodFactory` et `FrenchFoodFactory` qui implémenteront l'interface `FoodFactory` et ses méthodes:

```php
public function makeFood(): Food;
// => Qui créera une nourriture en fonction de la classe
// (AsianFood pour AsianFoodFactory ou FrenchFood pour FrenchFoodFactory)

public function makeExpert(): FoodChef;
// => Qui créera un chef en fonction de la classe comme makeFood()
```

Vous devez obtenir la sortie suivante:

```
I am an Asian food
I am an Asian chef, I can only do asian food
I am a French food
I am a French chef, I can only do french food
```