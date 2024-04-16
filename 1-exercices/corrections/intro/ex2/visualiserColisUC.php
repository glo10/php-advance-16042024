<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Visualiser un colis</title>
</head>

<body>
  <h1>Visualiser un colis</h1>
  <?php
    require_once 'menu.php';
    require_once '../ex1/Gestionnaire.php';
    require_once '../ex1/Colis.php';
    // UC 1 un gestionnaire visualise l'historique des livraisons
    $sarah = new Gestionnaire('Thomas', 'Sarah', 'Nice');
    $colis = new Colis(25, 35, 1);
    $sarah->visualiserHistorique();

    // UC 2 sarah visualise tous les colis
    $sarah->visualiserColis(new Colis(24, 45, 5));
  ?>
</body>

</html>