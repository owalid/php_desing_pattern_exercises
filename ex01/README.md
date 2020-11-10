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
select() // qui injectera dans l'attribut $select les parametre de la fonctions (ils sont à recupéré avec `func_get_args`)
from($table, $alias) // injecte dans le champs from la table $table avec $alias si il est present. (Le bon formatage avec un alias sera "<$table> AS <$alias>")
where() // la meme chose mais pour where mais qui poussera dans le tableau where les args
__toString() // qui retourne les differents champs bien formatter comme le veux l'index.php
```