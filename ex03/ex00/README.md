# ex03/ex00 - Simple Factory

Crée une simple factory, dans le fichier ComputerFactory.php qui permet de créer une instance de `ComputerDell` grace à la méthode `makeComputer()`

ComputerFactory aura une méthode:
```php
public static function makeComputer($brand): Computer
```
Cette méthode créera une nouvelle instance de `ComputerDell`

index.php devra retourné: `Dell`