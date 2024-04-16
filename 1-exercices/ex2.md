# Exercice 2 

1. Créez un projet avec composer en installant les dépendances ci-dessous en respectant les environnements
2. Dans le composer.json, ajoutez une clé nommée scripts et créez un script qui contient l'instruction `echo 'hello world'`. Lorsque ce script sera appelée depuis la commande `composer run CléDeMonScript`, le message `hello world`sera affiché dans la console.
3. Exécutez le script depuis la console.

## Dépendances globales (prod, dev et test)

- monolog/monolog
- psr/cache
- vlucas/phpdotenv
- twig/twig
- symfony/mailer

## Dépendances en développement (uniquement en dev et test)

- phpunit
- code coverage
- vfstream
- fakerphp/faker