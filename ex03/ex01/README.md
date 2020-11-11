# ex03 - Abstract factory

Crée une interface `FoodFactory`

Qui contiendra deux definitions de methodes:
```php
public function makeFood(): Food;
public function makeExpert(): FoodChef;
```

Crée ensuite deux classes `AsianFoodFactory` et `FrenchFoodFactory` qui implementera l'interface `FoodFactory` et ses methodes:

```php
public function makeFood(): Food; // qui creera une nourriture en fonction de la classe (AsianFood pour AsianFoodFactory ou FrenchFood pour FrenchFoodFactory)
public function makeExpert(): FoodChef; // => qui creera un chef en fonction de la classe comme makeFood()
```

Vous devez obtenir la sortie suivante:

```
I am an Asian food
I am an Asian chef, I can only do asian food
I am a French food
I am a French chef, I can only do french food
```