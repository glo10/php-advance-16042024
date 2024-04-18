# Les commandes

---

## Initialisation d'un projet

Toujours la première chose à faire pour un nouveau projet

1. Exécutez la commande `composer init`
2. Repondez aux questions posées dans le terminal
3. A la fin, dites yes pour qu'il puisse générer :
- Un fichier *composer.json*(contenant votre configuration)
- Un dossier vendor (contenir les dépendances) à ne jamais toucher et à ne jamais versionner
- un dossier *src* ou vous allez écrire votre code

---

## Rajouter des packages à son projet

Tous les packages disponibles de la communauté PHP (entreprises,dev,etc.) depuis le site [https://packagist.org/](https://packagist.org/)
1. Exécutez la commande `composer require <nomDuPackage>`
