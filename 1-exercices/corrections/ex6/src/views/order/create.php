<?php
require_once dirname(__DIR__) . '/../../bootstrap.php';

use App\Classes\Order;
use App\Classes\Article;
use App\Classes\OrderLine;
use App\Classes\Customer;

$articleRepo = $entityManager->getRepository(Article::class);
$userRepo = $entityManager->getRepository(Customer::class);
// Récupération des articles et d'un utilisateur
$item1 = $articleRepo->findOneBy(['id' => 1]);
$item2 = $articleRepo->findOneBy(['id' => 2]);
// Attention ici il faut avoir des utilisateurs avec les ids ci-après avec le rand, sinon erreur, car l'utilisateur n'existe pas
$client = $userRepo->findOneBy(['id' => rand(1,2)]);
// Création des lignes de commande avec calcul de prix
$line1 = new OrderLine(rand(1,10), $item1);
$line2 = new OrderLine(rand(1,10), $item2);
$line1->computePrice();
$line2->computePrice();
// Création de la commande
$order = new Order(uniqid('CMD-'), $client);
$lines = array($line1, $line2);
foreach ($lines as $line) {
  $order->addLine($line);
}
$order->computeTotalPrice();
// Persister dans la base de données
$entityManager->persist($order);
$entityManager->flush();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Commande effectuée</title>
</head>
<body class="container-fluid">
  <p>Commande effectuée avec le numéro de commande <?= $order->getNumber();?></p>
</body>
</html>
