# Correction exercice 6

## Pour exécuter la correction

1. Créez une base de donnée (BDD) via `PHPMYADMIN` par exemple
2. Modifiez les informations d'accès à votre BDD depuis le fichier `config/parameters.php`, attention au PORT (chez moi c'est `3308`, chez vous "normalement" c'est `3306`)
3. Exécutez à la racine du projet `composer install` pour régénérer le dossier `vendor`
4. Exécutez le script : `composer run c` (script présent dans la partie `scripts` du `composer.json` qui à son tour exécutera `php bin/doctrine orm:schema-tool:create`)

## Conseils amélioration du code

On commence à avoir beaucoup de code qu'on répète, on ne respecte pas le principe ***DRY (Don't Repeat Yourself)***. Essayez durant vos révisions de refactoriser le code en évitant au maximum la duplication du code pour cela pensez aux classes abstraites, interfaces et traits(qu'on n'a pas vu, vous trouverez la documentation sur les traits ci-après)

### Documentation sur les traits

- [W3Schools](https://www.w3schools.com/php/php_oop_traits.asp)
- [Doc PHP](https://www.php.net/manual/fr/language.oop5.traits.php)