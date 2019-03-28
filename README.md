# Blog PDO

## Objectif

Le but de cet atelier est de mettre un place un micro blog afin de pratiquer PDO.
Tu as à ta disposition tout un squelette html/css, tu n'as pas besoin d'y toucher. Concentre toi sur PHP et la manipulation de la base.

## Etapes
0. Après avoir cloné ce dépot, et lancé ton serveur PHP embarqué, attaque toi à la suite des directives ci-dessous.

1. Créer une base de données appelée **"blog"** en local via le terminal : 
```sql 
    CREATE DATABASE blog CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;`,
```

2. Créer une table **"article"** contenant les champs suivants avec les types adaptés :

```sql
mysql> DESCRIBE article;
+---------+--------------+------+-----+-------------------+----------------+
| Field   | Type         | Null | Key | Default           | Extra          |
+---------+--------------+------+-----+-------------------+----------------+
| id      | int(11)      | NO   | PRI | NULL              | auto_increment |
| title   | varchar(255) | NO   |     | NULL              |                |
| author  | varchar(255) | NO   |     | NULL              |                |
| date    | datetime     | YES  |     | CURRENT_TIMESTAMP |                |
| content | text         | YES  |     | NULL              |                |
+---------+--------------+------+-----+-------------------+----------------+
```

   
3. Configurer la connexion à la base de données via le fichier "inc/connection.php",

4. Créer une nouvelle instance `$pdo` de la classe PDO permettant à l'application de se connecter au serveur _(je te laisse deviner quel est l'endroit le plus judicieux)_,
3. Reprendre la page "create.php" contenant un formulaire pour permettre l'ajout d'un article. Pour cela tu dois :
    - Récuperer les données saisies par l'utilisateur,
    - Rédiger la requete permettant l'insertion d'un nouvel article,
    - Executer la requete via PDO.
    
4. Reprendre la page "index.php", afin d'afficher la liste des articles existants. Pour cela tu dois :
    - Rédiger la requete permettant de récuperer TOUS mes articles,
    - Executer la requete via PDO,
    - Récuperer le résultat de la requete pour afficher autant de _"cards"_ qu'il y a d'articles.
    - Adapter le fichier _"template/_card.php"_ pour que le contenu soit dynamique et issue de la base de données.
(le ficher _card.php étant en require dans "index.php", il a accès aux variables du fichier qui l'inclue).
    
5. Reprendre la page "article.php" afin d'afficher un article dans son ensemble en passant l'id de l'article voulu dans l'url. Pour cela tu dois :
    - Rédiger la requete permettant de récuperer un article, dont l'ID correspond à celui passé en paramètre dans l'url
    - Executer la requete via PDO,
    - Récuperer le résultat de la requete pour afficher le contenu issue de la base de données.

6. **BONUS :** Créer une page "author.php?name=AUTHOR_NAME" sur la base des pages déjà existantes qui permet de lister tous les articles d'un même auteur sur la base de son nom. N'oublies pas d'ajouter le lien vers cette page au bon endroit.

6. **BONUS :** Reprendre la page "index.php" pour y ajouter un systeme de pagination.

### Astuce

Tu as remarqué le footer ? tu y trouveras un affichage de debug des différentes informations que tu vas devoir manipuler.

## Resources
* [How To Connect To A Database Using PDO PHP](https://youtu.be/yWJFbPT3TC0)
* [How To Query A Database Using PDO PHP](https://youtu.be/m_-vmSv2PFo)
* [CRÉER UN RÉSEAU SOCIAL POUR DÉVELOPPEURS EN PHP - 4 - La base de données](https://youtu.be/GrqC6XKL-9A)
Cette vidéo (issue d'une playlist) présente une utilisation de PDO dans le cadre d'u
* [PHP Data Objects](https://www.php.net/manual/fr/book.pdo.php)
La documentation officielle.
* [Introduction à PDO](http://lindev.fr/?post/2008/10/19/Introduction-a-PDO)
Une explication textuelle 
* [Create Pagination in PHP and MySQL](https://youtu.be/gdEpUPMh63s)
Si tu t'attaques au second bonus, cette resource peut t'éclairer.
