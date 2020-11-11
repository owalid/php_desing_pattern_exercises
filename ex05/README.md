# ex05 - Bridge

##### Crée deux classes `BAndWFilter` et `SepiaFilter` dans le fichier `Filter.php` qui implementera l'interface `Filter` et sa methode `getFilter()`.

Les classes qui implementerons l'interface `Filter` auront:

Une methode:
```php
public function getFilter() // qui retournera le nom du filtre
```

#

##### Vous pouvez ensuite crée deux classes `Portrait` et `Landscape` dans le fichier `Picture.php` qui implemente l'interface `Picture` et ses methodes.

Les classes qui implementerons l'interface `Picture` auront:

Un attribut:
```php
protected $filter // Qui sera une instance de la classe Filter
```

Deux methodes:
```php
public function __construct(Filter $filter)
public function getPicture() // qui retournera une string, contenant le type de photo + le nom filtre courrant
```

Vous devez pouvoir lancer le fichier index.php.

Vous devez obtenir la sortie suivante:
```
Landscape picture with Black and white filter.
Portrait picture with Sepia filter.
```