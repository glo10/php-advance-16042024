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
/**
* La méthode persist() de l'EntityManager pour simplifier
* "met l'objet dans la liste d'attente des opérations futures à effectuer en BDD"
*/
$entityManager->persist($article);
$entityManager->persist($user);

/**
 * La méthode flush() de l'EntityManager
 * va effectuer les opérations en BDD
 */
$entityManager->flush();
/**
* Résultat final, un article et un client non pro sont
* insérés dans les tables respectives
*/

//-------------------------------------------------

// Objectif : récupérer les articles depuis la BDD
// Entité = Classes métiers = Les objets manipulées par le domaine d'activité
// A partir de l'EntityManager et de la méthode getRepository qui prend en paramètre le nom
// de la classe ciblée
$articleRepository = $entityManager->getRepository(Article::class); // Récupère le repository (objet pour récupérer une entité spécifique)
// Une classe repository possède quelques méthodes déjà pret à l'emploi
// 1. la méthode findAll() récupère tout
$articles = $articleRepository->findAll(); // idem que sans WHERE, tous les articles stockées dans la table article en BDD
// var_dump($articles);
// 2. la méthode findBy([]) : prend en paramètre un tableau associatif contenant une clé et une valeur
$articles1 = $articleRepository->findBy(['name' => 'Article 1']); // idem que WHERE name = "Article 1"
// var_dump($articles1);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Articles</title>
</head>
<body>
  <h1>Affichage des articles</h1>
    <ul>
      <?php foreach($articles as $article) : ?>
        <li>
          <?php echo $article->getName().' : '. $article->getUnitPrice(). ' €'; ?>
          <button>Acheter</button>
        </li>
      <?php endforeach; ?>
    </ul>
</body>
</html>