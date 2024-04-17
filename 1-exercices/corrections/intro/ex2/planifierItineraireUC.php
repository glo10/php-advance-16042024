<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Planifier itinéraireq</title>
</head>

<body>
  <h1>Planifier iténaire</h1>
  <?php
    require_once 'menu.php';
    require_once '../ex1/Transporteur.php';
    require_once '../ex1/Colis.php';
    // UC un transporteur planifie une iténaire de livraison
    $mondialRelais = new Transporteur('Mondial Relais', 'Transport', 'Paris');
    $colis = new Colis(50, 50, 30, 'En cours de transfert');
    $mondialRelais->planifierLivraison($colis);
  ?>
</body>

</html>