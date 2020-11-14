# ex05 - Bridge

##### Créé deux classes `BAndWFilter` et `SepiaFilter` dans le fichier `Filter.php` qui implémentera l'interface `Filter` et sa méthode `getFilter()`.

Les classes qui implementerons l'interface `Filter` auront:

Une methode:
```php
public function getFilter() // qui retournera le nom du filtre
```

#

##### Vous pouvez ensuite créer deux classes `Portrait` et `Landscape` dans le fichier `Picture.php` qui implémente l'interface `Picture` et ses méthodes.

Les classes qui implémenteront l'interface `Picture` auront:

Un attribut:
```php
protected $filter 
// Qui sera une instance de la classe Filter
```

Deux methodes:
```php
public function __construct(Filter $filter)

public function getPicture()
// Qui retournera une string, contenant le type de photo + le nom filtre courant
```

Vous devez pouvoir lancer le fichier index.php.

Vous devez obtenir la sortie suivante:
```
Landscape picture with Black and white filter.
Portrait picture with Sepia filter.
```