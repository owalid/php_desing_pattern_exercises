# ex01 - Builder

Crée une classe QueryBuilder qui contiendra:

Trois attributs:
```php
$select // qui sera un tableau ou contiendra les instructions d'un select
$from // la meme chose mais pour from
$where // la meme chose mais pour where
```

Trois fonctions:
```php
select(...$args) // qui injectera dans l'attribut $select les parametre de la fonctions
from($table, $alias = false) // injecte dans l'attribut $from la table $table avec $alias si il est present. (Le bon formatage avec un alias sera "<$table> AS <$alias>")

where(...$args) // la meme chose mais pour where mais qui poussera dans le tableau where les args

__toString() // qui retourne une string qui sera les differents champs bien formatter comme le veux sujet (penser à utiliser la fonction implode pour bien separé le contenu des tableaux)
```

La paricularité des Builder comme vous pouvez le voir dans `l'index.php` c'est que vous pouvez chainé les methodes d'une meme instance. Pour ce faire vous devez toujours renvoyer `$this` à la fin de vos de methodes.

Retour souhaité de l'index.php:
```
SELECT id, firstname, lastname FROM usr AS user WHERE u.id = 1 AND u.lastname = Dupond
```