# ex04 - Adapter

Crée un Adapter nommé `FbMessageManagerAdapter` (dans le fichier `facebook/FbMessageManagerAdapter.php`) qui implementera l'interface `MessageManagerInterface` et qui aura:

Un attribut:
```php
private $fbMessageManager // => qui sera une instance de la classe FbMessageManager
```

```php
public function __construct(FbMessageManager $fbMessageManager) // qui initialisera l'attribut $fbMessageManager
public function printMessage($msg) // qui appelera la fonction printMessageFb() de l'instance de FbMessageManager en passant en parametre $msg
```

La sortie que vous devez obtenir est la suivante: 
```
print "hello world" by basic
print "hello world" by adapter
```