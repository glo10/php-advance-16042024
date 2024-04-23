<?php

require_once dirname(__DIR__).'/../../bootstrap.php';
use App\Classes\Article;
$articleRepository = $entityManager->getRepository(Article::class);
$articles = $articleRepository->findAll();

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tous les articles</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="container-fluid">
  <h1>Articles disponibles</h1>
  <ul class="list-group">
    <?php foreach($articles as $article) : ?>
      <li class="list-group-item">
        <?= 'Article '. $article->getName(). ' en stock avec '.
        $article->getQty(). ' unité(s) au prix unitaire de '.
        $article->getUnitPrice();?>
      </li>
      <?php endforeach; ?>
    </ul>
</body>
</html>