# ex01 - Decorator

La classe `SimpleCookie` implémente l'interface `Cookie`.

Faites en sortes d'utiliser un décorateur avec les classes `CookieMacadamia`, `CookieWhiteChocolate`.
Dans le fichier `DecoratorCookie.php`.

Les décorateurs auront dans leurs classes:

Un attribut:

```php
protected $cookie; // Qui sera une instance de la classe Cookie qui sera initialisée au constructeur
```

Des methodes:

```php
public function __construct(Cookie $coffee)

public function getCalories(): Cookie
// Qui retournera la calorie courrante + l'ajout d'un nombre

public function getType(): string
// Qui retournera le type courrant + l'ajout d'une string
```

La sortie que vous devez obtenir est la suivante:

```
Simple Cookie 170
Simple Cookie, macadamia 180
Simple Cookie, macadamia, white chocolate 200
```
