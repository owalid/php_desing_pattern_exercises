# ex01 - Builder

Crée une classe QueryBuilder qui contiendra:

Trois attributs:

```php
private $select = []; // Qui sera un tableau ou contiendra les instructions d'un select
private $from = []; // La même chose mais pour from
private $where = []; // La même chose mais pour where
```

Trois fonctions:

```php
public function select(...$args): QueryBuilder {}
// Qui injectera dans l'attribut $select le parametre $args.

public function from($table, $alias = false): QueryBuilder {}
// Injecte dans l'attribut $from la table $table ainsi que l'alias $alias uniquement si il est présent.
// (Le bon formatage avec un alias sera "<$table> AS <$alias>")

public function where(...$args): QueryBuilder {}
// La même chose mais pour where mais qui poussera dans le tableau where le parametre $arg.

public function __toString(): QueryBuilder {}
// Qui retourne une string qui sera les différents attribut de la classe, bien formatter comme le veux sujet.
// (penser à utiliser la fonction implode pour bien séparer le contenu des tableaux, des virgules pour le $select et le $from et des "AND" pour le $where).
```

La particularité des Builder comme vous pouvez le voir dans `l'index.php` c'est que vous pouvez chainer les méthodes d'une même instance.
Pour ce faire vous devez toujours renvoyer `$this` à la fin de vos de méthodes.


La sortie que vous devez obtenir est la suivante: 

```
SELECT id, firstname, lastname FROM usr AS user WHERE u.id = 1 AND u.lastname = Dupond
```