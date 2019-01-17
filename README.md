# TP Docker-compose
## Caractéristiques:
- Serveur php avec lighttpd
- BD Mysql sur un deuxieme container

## Overview
Un fichier DockerCompose appelle les deux dockerfiles (de chaque container).
L'intitulé _**link**_ permet au container web de se connecter à l'autre container
Chaque DockerFile permet d'importer des fichiers de la machine locale au container.
La commande `tail -F` permet de laisser les containers en exécution, ensuite on peut s'y connecter grâce à "docker exec".
La ligne _**port**_ permet de mapper les ports du container aux ports de la machine hôte.
Ainsi, pour se connecter au site web il suffit de taper "_localhost:4000_" sur la machine hôte.

## Problèmes
Cependant la requête SQL du serveur Web à la BDD renvoie une erreur 403 que l'on a pas réussi à régler, malgré nos efforts. Les log par défaut étant **user: root**, sans mot de passe.
Nous avons préféré rendre un TP sur lequel nous avons travaillé qui ne fonctionne pas, plutôt qu'une solution fonctionnelle copiée sur internet qui ne nous aurait rien apporté.
