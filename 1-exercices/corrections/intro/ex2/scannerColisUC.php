<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Scanner un colis</title>
</head>

<body>
  <h1>Scanner un colis</h1>
  <?php
    require_once 'menu.php';
    require_once '../ex1/Personne.php';
    require_once '../ex1/Transporteur.php';
    require_once '../ex1/Colis.php';

    // UC un transporteur scanne un colis
    $ups = new Transporteur('DHL', 'Transport', 'Londres');
    $colis = new Colis(50, 40, 30, 'Scanné au centre de Londres');
    $ups->scanner($colis);
  ?>
</body>

</html>