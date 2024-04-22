<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Commande</title>
</head>
<body>
  <h1>Passez une commande</h1>
  <?php
  // 0. Importation de mes classes
  require_once '../classes/Article.php';
  require_once '../classes/Customer.php';
  require_once '../classes/OrderLine.php';
  require_once '../classes/Order.php';
  // 1. Création des articles dans le stock
  $teeShirt = new Article(100, 19.99);
  $teeShirt->setName('T-shirt');
  $pant = new Article(250, 24.99);
  $pant->setName('Pantalon');
  $shoes = new Article(10, 99.99);
  $shoes->setName('Chaussures');
  // 2. Création d'un client
  $glodie = new Customer('Glodie Tshimini', 'Paris', '123456789988');
  // 3. Ajout des lignes de commande (articles au panier)
  $twoTShirt = new OrderLine(2, $teeShirt);
  // Calcul du prix de la ligne de commande par l'appel de la méthode computePrice()
  $twoTShirt->computePrice();
  $threePants = new OrderLine(3, $pant);
  $threePants->computePrice();
  $oneShoe = new OrderLine(1, $shoes);
  $oneShoe->computePrice();
  // 4. Création de la commande et lien avec le client
  $order = new Order(
    uniqid('CMD-'),
    $glodie
  );
  $order->setOrderLines(array($twoTShirt, $threePants, $oneShoe));
  // 5. Calcul du prix total des articles présent dans la commande
  $order->computeTotalPrice();
  var_dump($order);
  // Suppression d'une commande
  unset($order);
  // Respecter la composition (suppression de la commande entraine la suppression des lignes de commande de cette commande)
  ?>
</body>
</html>