# ex06 - Adapter

Crée un Adapter nommé `FbMessageManagerAdapter` (dans le fichier `facebook/FbMessageManagerAdapter.php`) qui implémentera l'interface `MessageManagerInterface` et qui aura:

Un attribut:
```php
// Qui sera une instance de la classe FbMessageManager
private $fbMessageManager
```

```php
public function __construct(FbMessageManager $fbMessageManager)
// Qui initialisera l'attribut $fbMessageManager

public function printMessage($msg)
// Qui appellera la fonction printMessageFb()
// de l'instance de FbMessageManager en passant en paramètre $msg
```

La sortie que vous devez obtenir est la suivante: 
```
print "hello world" by basic
print "hello world" by adapter
```
