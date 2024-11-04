# Question

q dans quel dossier peut-on créer un projet?
r par exemple 'C:\Users\Nom_utilisateur\Desktop\Projects'

q quelle commande faut-il taper pour créer un projet?
r composer create-project laravel/laravel nom_du_projet

q dans 'laravel/laravel' à quoi corresponde le 'laravel' avant le slash '/'?
r C'est le nom de l'utilisateur sur Github (celui qui diffuse le code, l'éditeur de code)

q q dans 'laravel/laravel' à quoi corresponde le 'laravel' après le slash '/'?
r C'est le nom du projet crée par l'auteur du code (le nom du projet sur Github)

q quels sont les étapes de création d'un nouveau projet laravel?
r 1. Ouvrir le dossier dans vscode
2. npm install
3. modifier le fichier '.env' (nom du projet, fuseau horaire, langue,)
4. Configurer laravel pour l'utilisation de MySQL ou MariaDB ('.env') et la commande ('php artisan migrate'). Il faut aussi aller dans le fichier 'config/database.php' et modifier le "engine => 'InnoDB'"


q A quoi sert le fichier 'resources/views/base.blade.php' ?
r Aléger les vues en mettant tout le HJTML en commun entre toutes les pages dans 'base.blade.php'


q Comment crée une nouvelle page web ?
r 1. crée un nouveau fichier 'foo.blade.php' dans le dossier 'ressources/views/'
2.Ajouter '@extends('base') dans le fichier 'blade'
3.Insérer du code HTML dans les balises sections (par exemple '@section('content')')

q Quelle est la différence entre '@section() @show' et '@yield()' ?
r Les deux permettent aux templates enfants de modifier le template parent. Mais '@section () @show et '@yield()' permet de définir un contenu par défaut alors que '@yield()' permet de définir un contenu par défaut sur une seule ligne

q Quelles commandes taper pour voir le projet dans un navigateur?
r 1. Ouvrir deux terminaux
2. php artisan serve (pour lancer le serveur)
3. npm run dev (pour compiler les fichiers CSS/JS)

q Est-ce qu'un contrôleur peut transmettre une variable à une vue?
r Oui

q Est-ce qu'une variable doit forcément avoir le même nom dans le contrôleur et dans la vue?
r Non, c'est recommandé mais pas obligatoire

q Quelle fonction utiliser pour récupérer pour un élément de la BDD à partir de son id (clé primaire)?
r Il faut utiliser le modèle et la fonction 'find()' (exemple 'Actu::find(1)')