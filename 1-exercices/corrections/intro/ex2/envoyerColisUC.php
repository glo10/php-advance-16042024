<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Envoyer un colis</title>
</head>
<body>
  <h1>UC Envoyer un colis</h1>
  <?php
    require_once 'menu.php';
    require_once '../ex1/Expediteur.php';
    require_once '../ex1/Colis.php';
    // UC un expiditeur envoie un colis
    $bob = new Expediteur('Marley', 'Bob', 'Jamaïque');
    $colis = new Colis(100, 50, 10, 'En cours de livraison');
    $bob->envoyerColis($colis);
  ?>
</body>
</html>