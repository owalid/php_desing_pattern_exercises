# ex03/ex00 - Simple Factory

Crée une simple factory, dans ComputerFactory.php qui permet de crée une instance de `ComputorDell` grace à la methode `makeComputor()`

ComputerFactory aura une methode:
```php
public static function makeComputer($brand): Computer
```
Cette methode créera une nouvelle instance de `ComputerDell`

index.php devra retourné: `Dell`