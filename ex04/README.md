# ex04 - Adapter

Crée un Adapter nommé `FbMessageManagerAdapter` (dans le fichier `facebook/FbMessageManagerAdapter.php`) qui implémentera l'interface `MessageManagerInterface` et qui aura:

Un attribut:
```php
// Qui sera une instance de la classe FbMessageManager
private $fbMessageManager
```

```php
// qui initialisera l'attribut $fbMessageManager
public function __construct(FbMessageManager $fbMessageManager)

// qui appellera la fonction printMessageFb()
// de l'instance de FbMessageManager en passant en paramètre $msg
public function printMessage($msg)
```

La sortie que vous devez obtenir est la suivante: 
```
print "hello world" by basic
print "hello world" by adapter
```