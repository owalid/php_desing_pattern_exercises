# ex02 - Decorator

La classe `SimpleCookie` implemente l'interface `Cookie`.

Faites en sortes d'utiliser un decorateurs avec les classes `CookieMacadamia`, `CookieWhiteChocolate`. Dans le fichier `DecoratorCookie.php`.

Les decorateurs aurons dans leurs classes:

Un attribut:
```php
protected $cookie;
```

Des methodes:
```php
__construct(Cookie $cookie)
getCalories() // => qui retournera la calorie courrante + l'ajout d'un nombre
getType() // => qui retournera le type courrant + l'ajout d'une string
```

Le retour devra obtenu devra etre celui ci:
```
Simple Cookie 170
Simple Cookie, macadamia 180
Simple Cookie, macadamia, white chocolate 200
```