<?php

require_once dirname(__DIR__).'/../../bootstrap.php';
use App\Classes\Order;
$orderRepo = $entityManager->getRepository(Order::class);
$orders = $orderRepo->findAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <title>Page commandes</title>
</head>
<body class="container">
  <header>
    <h1>Toutes les commandes</h1>
  </header>
  <main>
    <table class="table table-striped-columns">
      <thead>
        <tr>
          <th>Numéro de commande</th>
          <th>Prix total</th>
          <th>Client</th>
          <th>Date de la commande</th>
        </tr>
      </thead>
      <tbody>
        <?php
        // <?= idem que <?php echo
        foreach($orders as $order): ?>
        <tr>
          <td><?= $order->getNumber() ;?></td>
          <td><?= $order->getPrice(). ' €' ;?></td>
          <td><?= $order->getCustomer()->getName() ;?></td>
          <td><?= $order->getCreateAt()->format('d/m/y H:i:s') ;?></td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </main>
</body>
</html>