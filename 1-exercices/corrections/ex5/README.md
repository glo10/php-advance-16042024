# Pour exécuter la correction

1. Créez une base de donnée (BDD) via `PHPMYADMIN` par exemple
2. Modifiez les informations d'accès à votre BDD, attention au PORT (chez moi c'est `3308`, chez vous "normalement" c'est `3306`)
3. Exécutez à la racine du projet `composer install` pour régénérer le dossier `vendor`
4. Exécutez le script : `composer run c` (script présent dans la partie `scripts` du `composer.json` qui à son tour exécutera `php bin/doctrine orm:schema-tool:create`)