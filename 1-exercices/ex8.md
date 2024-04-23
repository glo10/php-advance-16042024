# Exercice 8 : récupérer des informations depuis des APIs externes

## Modalités

- Utilisez les classes à partir de l'exercice 5 ou 6 ainsi que la base de données associée

## Fonctions dont vous aurez besoin

- [file_get_contents()](https://www.php.net/manual/en/function.file-get-contents.php)
- [json_decode()](https://www.php.net/manual/en/function.json-decode.php)

## Ressources
<!--
- [API GitHub pour récupérer des utilisateurs](https://api.github.com/users)
-->
- Base URI OpenFoodFact pour récupérer les informations sur un produit  `https://fr.openfoodfacts.org/api/v0/produit/{id}.json` en remplaçant `{id}` pour l'id du produit.

## Enoncé
<!--
1. Depuis vos classes PHP et Doctrine, modifiez la structure de la table dédiée aux utilisateurs publics (non-professionnels) pour rajouter les champs suivants :
- *avatar_url* : url vers l'image de l'avatar de l'utilisateur
- *url* : url du dépôt GitHub de l'utilisateur
2. A partir de l'[API de GitHub](https://api.github.com/users), insérez quelques nouveaux utilisateurs dans la base de données (BDD).
-->
1. Depuis vos classes PHP et Doctrine, modifiez la structure de la table dédiée aux articles en ajoutant les nouveaux champs suivants, entre parenthèses le nom du champ depuis les données récupérées via l'API :
- Code (*code*)
- Marque (*brands*)
- Lien vers une photo du produit (*image_url*)
- Le score nutriscoe (*nutriscore_grade*)

2. A partir de l'API d'OpenFoodFact, insérez quelques articles dans la base de données. 
