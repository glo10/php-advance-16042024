<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Suivre colis</title>
</head>

<body>
  <h1>Suivre colis</h1>
  <?php
    require_once 'menu.php';
    require_once '../ex1/Destinataire.php';
    require_once '../ex1/Colis.php';
    // UC un destinataire suit son colis
    $maria = new Destinataire('Anne', 'Maria', 'Bordeaux');
    $colis = new Colis(200, 40, 50, 'Départ imminent');
    // nouvelle méthode créer à partir du cas d'utilisation
    $maria->suivreColis();
  ?>
</body>