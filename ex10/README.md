# ex10 - Proxy


Crée un proxy dans le fichier `Security.php`:
Cette classe Security contiendra:

Un attribut:
```php
protected $door;
// Qui sera une instance de Door qu'on voudra tester
```

Deux methodes:
```php
public function open($password)
// Qui testera le mot de passe $password avec la fonction authenticate.
// Si le mot de passe est exact la fonction devra appeler la méthode open de l'attribut $door de la classe.

private function authenticate($password)
// Qui renvoie true si $password est égal à '$ecr@t' false sinon

public function close()
// Qui appelle la méthode close() de l'attribut $door de la classe.
```

La sortie que vous devez obtenir est la suivante: 

```
Big no! It ain't possible.
Opening bank door
Closing the bank door
```