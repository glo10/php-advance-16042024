<?php 

use App\Classes\Article;


 
require'../../bootstrap.php';
 
/**
 * EntityManager qu'on stocke dans la variable $entityManager
 * sert à faire les opérations CRUD
 */
$article = new Article(rand(5,20), rand(5,20));
$article->setName('Article 1');

$article2 = new Article(rand(5,20), rand(5,20));
$article2->setName('Article 2');

$article3 = new Article(rand(5,20), rand(5,20));
$article3->setName('Article 3');

$article4 = new Article(rand(5,20), rand(5,20));
$article4->setName('Article 4');


// Objectif : on veut enregistrer l'article et un user dans la BDD
/*
* La méthode persist() de l'EntityManager met l'objet
* dans la liste d'attente des opérations futures à effectuer en BDD
*/
$entityManager->persist($article);
$entityManager->persist($article2);
$entityManager->persist($article3);
$entityManager->persist($article4);

/**
 * La méthode flush() de l'EntityManager
 * va effectuer les opérations en BDD
 */
$entityManager->flush();
/*
* Résultat finale, un article et un client non pro qui seront
* insérer dans les tables respectives
*/
 