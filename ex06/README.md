# ex06 - Observable

Crée un Observable nommé Emitter qui sera un singleton qui contiendra:

Deux variables:

```php
private static $instance;
// Qui sera l'instance courante du singleton
private $listeners = [];
// Qui sera un tableau à doubles dimensions indexer pour le premier par événement,
// le deuxième tableau contiendra une fonction qui sera passé en paramettre de la méthode `on`
```

Trois methodes:

```php
public static function getInstance(): Emitter {}
// => Qui retournera l'instance courante ou en créera une si $instance est vide.

public function emit(string $event, ...$args) {}
// => parcours le tableau $listeners à l'index $event
// et appelle la fonction avec les $args en paramètre.
// (penser à utiliser la fonction php "call_user_func_array")

public function on(string $event, callable $fct) {}
// => Recupere la fonction $fct et la met dans le tableau de listeners à l'index $event.
```

Cet observable servira à émettre des événements et appliquer des fonctions quand il en recevra.

La sortie que vous devez obtenir est la suivante: 

```
New user: admin
New user: user
User: user commented: Nice !
User: admin commented: Thanks !
```