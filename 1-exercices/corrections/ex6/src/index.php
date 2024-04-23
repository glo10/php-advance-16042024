<?php

/**
 * Attention idéalement éviter d'avoir des clés avec un slash ici pour une question de gain de temps que je le fais
 * Idéalement il faut créer un tableau à 2 dim
 * $pages = [
 *  ["name" =>"...", "url" => "..."]
 * ]
 */
$id= rand(1, 2);
$pages = [
  'article/create.php' => 'Créer des articles',
  'article/readAll.php' => 'Voir tous les articles',
  'article/readOne.php?id='.$id => 'Voir l\'article dont l\'ID est '.$id,
  'customer/create.php' => 'Créer des utilisateurs B2C',
  'customer/readOne.php?id='.$id => 'Voir l\'utilisateur B2C dont l\'ID est '.$id,
  'company/create.php' => 'Créer des clients B2B',
  'client/readAll.php' => 'Voir tous les clients (B2C et B2B)',
  'order/readAll.php' => 'Voir toutes les commandes',
  'order/create.php' => 'Effectuer une commande'
];
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <title>Accueil</title>
</head>
<body class="container-fluid">
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <ul class="navbar-nav p-2">
    <?php foreach($pages as $link => $name) : ?>
      <li class="nav-item h6">
        <a class="nav-link" href="<?= 'views/'.$link; ?>">
          <?= $name; ?>
        </a>
      </li>
    <?php endforeach; ?>
  </ul>
</nav>
</body>
</html>