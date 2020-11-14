# ex00 - Singleton

Crée un singleton nommé `Single` qui contiendra:

Une variable:

```php
private static $instance;
// => qui sera une instance de votre Classe "Single"
```

Une methode:

```php
public static function getInstance(): Single
// => retourne l'instance courrante (self::$instance;) ou en initalise une nouvelle et la retourne juste apres l'avoir crée.
```

index.php doit retourner `OK`