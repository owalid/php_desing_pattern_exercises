# ex11 - MVC

Le but de ce mini-projet est de vous familiariser avec l'architecture MVC.

Vous devez créer un site d'article avec l'architecture MVC.


Le dossier `models` contiendra des classes qui représenteront le modèle de données.

Le dossier `controllers` contiendra des classes qui s'occuperont d'appeler un model avec une fonction spécifique.

Le dossier `views` contiendra les vues du site.

#

Vous devez implémenter:

### Model
- Un modèle `Post` qui contiendra toutes les fonctions pour créer, supprimer, récupéré un ou tous les articles.

### Vues
- Une vue `home` qui contiendra une home page.

- Une vue `/posts/index` qui contiendra une liste de tous les articles qui ont été posté (en affichant uniquement le titre), ainsi qu'un formulaire pour soumettre un nouvel article avec la méthode `POST`.

  - Dans la liste d'articles, pour ligne il y aura deux boutons: un pour voir en detail l'article et un autre qui supprimera l'article.

- Une vue `/posts/show` qui sera le résultat de l'action d'un clic sur le bouton pour voir le detail sur la liste d'article.
Cette vue contiendra le detail de l'article sélectionner précédement.

- Pour chaque type de vues (`posts` et `pages`) vous devez prendre en compte les erreurs et afficher les vues "erreur" losqu'un problème survient. (mauvaise url, formulaire mal rempli etc).

### Controlers
- Deux contrôlleurs: Posts et Pages qui importeron la bonne vue en fonction du fichier
  - Posts: contiendras les fonctions pour créer, supprimer récupéré un ou plusieurs article et mettera à jours le post courrant utilisé dans les vues

  - Pages: contiendra les fonctions utiles pour afficher la homepage


### BDD
Vous devez implémenté:

- Un singleton nommé `Db` qui sera défini dans le fichier `connection.php`.
Qui sera en charge de créer une nouvelle connexion PDO.

Aide:
```php
$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
self::$instance = new PDO('mysql:host=localhost;dbname=php_mvc', 'root', '', $pdo_options;
```


Pour le serveur base de donnée:

La base de données devra s'appeler: `php_mvc`
Elle aura une table nommée: `posts`
Qui contiendra trois champs:
- `id` => Qui sera un autoincrement
- `author` => Qui contiendra le nom de l'auteur de l'article
- `content` => Qui contiendra le contenu de l'article.

Les routes sont déjà géré dans le fichier `routes.php`.
Les actions à utilisé et la connexion à la bdd se trouve dans le fichier `index.php`.

Vous ne devez ajouter aucun fichier au projet.
Vous devez gérer les erreurs.
