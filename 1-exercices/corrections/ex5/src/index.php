<?php

use App\Classes\Customer;
use App\Classes\Article;

require_once dirname(__DIR__).'/bootstrap.php';

/**
 * EntityManager qu'on stocke dans la variable $entityManager
 * sert à faire les opérations CRUD
 */
$article = new Article(100, 125);
$article->setName('Article 2');
$user = new Customer('Thomas', 'Lille', 9988882344555);
// Objectif : on veut enregistrer l'article et un user dans la BDD
/*
* La méthode persist() de l'EntityManager met l'objet 
* dans la liste d'attente des opérations futures à effectuer en BDD
*/
$entityManager->persist($article);
$entityManager->persist($user);

/**
 * La méthode flush() de l'EntityManager
 * va effectuer les opérations en BDD
 */
$entityManager->flush();
/*
* Résultat finale, un article et un client non pro qui seront
* insérer dans les tables respectives
*/
