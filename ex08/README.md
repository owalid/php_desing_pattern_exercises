# ex09 - Iterator

Implémenter la classe StationList qui contiendra:

Deux attributs:

```php
protected $stations = []; // qui sera un tableau de RadioStation
protected $counter; // qui sera le compteur courant
```

Des methodes:

```php
public function addStation(RadioStation $station)
// Qui poussera dans l'attribut $stations le paramètre $station

public function removeStation(RadioStation $toRemove)
// qui supprimera de l'attribut $stations le paramètre $toRemove. (voir la methode array_filter de la librairie php)

public function count(): int
// Qui retournera le nombre de stations présente dans le tableau $stations

public function current(): RadioStation
// Qui retourne la station courante grace à $counter

public function key()
// Qui retourne le compteur courant

public function next()
// Qui incrémente le compteur

public function rewind()
// Qui remet le compteur à zéro

public function valid(): bool
// Qui vérifie si la station actuelle existe bien.
```


La sortie que vous devez obtenir est la suivante: 

```
89
101
102
103.2

3
```