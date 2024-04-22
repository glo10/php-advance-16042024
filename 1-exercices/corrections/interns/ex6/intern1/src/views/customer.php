<?php 
use App\Classes\Customer;


 
require'../../bootstrap.php';
 
/**
 * EntityManager qu'on stocke dans la variable $entityManager
 * sert à faire les opérations CRUD
 */


$user = new Customer('Thomas', 'Lille', 9988887702344555);
$user2 = new Customer('laurent', 'lyon', 998808854785);
$user3 = new Customer('alexis', 'paris', 99811545062344555);
$user4 = new Customer('jean', 'Marseille', 998881117823044555);




// Objectif : on veut enregistrer l'article et un user dans la BDD
/*
* La méthode persist() de l'EntityManager met l'objet
* dans la liste d'attente des opérations futures à effectuer en BDD
*/

$entityManager->persist($user);
$entityManager->persist($user2);
$entityManager->persist($user3);
$entityManager->persist($user4);
 
/**
 * La méthode flush() de l'EntityManager
 * va effectuer les opérations en BDD
 */
$entityManager->flush();
/*
* Résultat finale, un article et un client non pro qui seront
* insérer dans les tables respectives
*/
 