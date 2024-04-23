<?php

// Récupérer le contenu depuis une ressource distante en JSON via la fonction file_get_contents, la ressource peut être distante ou locale
$dataString = file_get_contents('https://jsonplaceholder.typicode.com/photos'); // récupérer le contenu depuis une ressource distante
$dataJson = json_decode($dataString, true); // Transforme du JSON (string) en PHP (Généralement dans le sens de communication du client (votre application) vers le serveur(application distante qui fournit les ressources))
$userLocale = json_decode(file_get_contents(__DIR__.'/user.json')); // depuis une ressource locale
var_dump($userLocale);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
    <?php foreach($dataJson as $dataArray) : ?>
      <div>
        <h3>Titre : <?= $dataArray['title'];?></h3>
        <img src="<?= $dataArray['thumbnailUrl'];?>" alt="image of picture">
      </div>
      <?php break; ?>
    <?php endforeach; ?>
</body>
</html>