<?php

require_once dirname(__DIR__).'/../../bootstrap.php';
use App\Classes\Article;

$id = $_GET['id']??null;
$id = $id != null ? htmlspecialchars($id):$id;
$articleRepository = $entityManager->getRepository(Article::class);
$article = $articleRepository->findOneBy(['id' => $id]);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Article ID <?= $article->getId();?></title>
</head>
<body class="container-fluid">
  <header>
    <h1>Article : <?= $article->getName(); ?></h1>
  </header>
<div class="card" style="width: 25rem;">
  <img class="card-img-top" src="https://fr.openfoodfacts.org/images/icons/dist/packaging.svg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title"><?= $article->getName(); ?></h5>
    <p class="card-text"><?= $article->getUnitPrice(); ?>&nbsp;€</p>
    <a href="#" class="btn btn-success">Acheter</a>
  </div>
</div>
</body>
</html>