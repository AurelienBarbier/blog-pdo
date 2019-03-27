# Blog PDO

## Objectif

Le but de cet atelier est de mettre un place un micro blog afin de pratiquer PDO.
Tu as à ta disposition tout un squelette html/css, tu n'as pas besoin d'y toucher. Concentre toi sur PHP et la manipulation de la base.

## Etapes
0. Après avoir cloné ce dépot, et lancé ton serveur PHP embarqué, attaque toi à la suite des directives ci-dessous.
1. Créer une base de données appelée **"blog"** en local via le terminal,
2. Créer une table **"article"** contenant les champs suivants avec les types qui te semble appropriés :

    - id
    - title 
    - content
    - author
    - date

3. Configurer la connexion à la base de données via le fichier "connection.php",
4. Créer une nouvelle instance `$pdo` de la classe PDO permettant l'application de se connecter au serveur _(je te laisse deviner quel est l'endroit le plus judicieux)_,
3. Reprendre la page "create.php" contenant un formulaire pour permettre l'ajout d'un article,
4. Reprendre la page "index.php", afin d'afficher la liste des articles existants.
5. Reprendre la page "article.php" afin d'afficher un article dans son ensemble.
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