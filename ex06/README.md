# ex06 - Observable

Crée un Observable nommé emitter qui sera un singleton qui contiendras:

Deux variables:

```php
$instance // => qui sera l'instance courrante
$listeners // => qui sera un tableau à double dimensions indexer pour le premier par evenement, le deuxieme tableau contiendra une fonction qui sera passer en paramettre de la methode `on`
```

Trois methodes:

```php
getInstance() // => qui retournera l'instance courrante ou en créera une si $instance est vide.
emit(string $event, $arg) // => Appel la fonction à l'index $event ou on passera $arg en parametre. (penser à utiliser la fonction php "call_user_func_array" )
on(string $event, callable $fct) // => recupere la fonction $fct et la met dans le tableau de listeners à l'index $event.
```

Cet observable seriva à emettre des evenements et appliquer des fonctions quand il en recevra.
Votre code devras fonctioner avec le fichier index.php