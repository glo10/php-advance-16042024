# Les commandes

---

## Initialiser d'un projet

Toujours la première chose à faire pour un nouveau projet

1. Exécutez la commande `composer init`
2. Repondez aux questions posées dans le terminal à la suite de cette commande
3. A la fin, dites *yes* pour qu'il puisse générer :
- Un fichier *composer.json*(contenant votre configuration)
- Un dossier vendor (contenir les dépendances) à ne jamais toucher et à ne jamais versionner
- un dossier *src* ou vous allez écrire votre code

---

## Ajouter des packages(extensions) à son projet

Tous les packages disponibles de la communauté PHP (entreprises,dev,etc.) depuis le site [https://packagist.org/](https://packagist.org/)
1. Exécutez la commande `composer require <nomDuPackage>`
Par exemple pour dotrine ORM `composer require doctrine/orm`

---

## Régénérer le dossier vendor

Dossier vendor inutile de le partager car :
1. Peut être régénéré à l'aide de la commande suivante
2. On y touche jamais, on laisse composer le gérer comme il sait bien le faire
3. Il peut être très lourd donc ralentir l'envoi ou la récupération des modifications d'un projet versionné avec un dépôt distant (github par exemple).

- La commande à exécuter `composer install` regénère le dossier `vendor`

---

## Désinstaller un package

- `composer remove <nomDuPackage>` par exemple pour `twig/twig`, c'est `composer remove twig/twig`