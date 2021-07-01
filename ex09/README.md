# ex09 - Chain of responsibility


Implémenter la classe Account, cette classe contiendra:

Deux attributs:

```php
protected $successor;
// Qui sera l'account successeur de l'instance courante
protected $balance;
// Qui sera la quantité d'argent contenu dans l'instance courante
```

```php
public function setNext(Account $account)
// Qui mettra le paramètre $account dans l'attribut $successor

public function canPay($amount): bool
// Qui renvoie true si l'attribut $balance est supérieur au paramètre $amount

public function pay(float $amountToPay)
// Qui sera une fonction récursive:

// Elle testera dans un premier temps:

// Si l'account courrant peut payer (en appelant la méthode canPay avec en paramètre $amountToPay)

// Si elle peut payer vous afficherez un messsage avec la classe avec laquelle elle a payé et le prix qu'elle à payé

// Si on ne peux pas payer:

// On verifie si l'attribut $successor n'est pas vide, alors on appelle la fonction pay avec l'attribut successor, et le meme paramètre que précédement ($amouToPay)

// Si on ne peut pas payer et qu'il n'y a pas de successeur alors on affiche: None of the accounts have enough balance


```


La sortie que vous devez obtenir est la suivante:

```
Cannot pay using Bank. Proceeding ..
Cannot pay using Paypal. Proceeding ..
Paid 259 using Bitcoin
```
