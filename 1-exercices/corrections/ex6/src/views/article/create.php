<?php

require_once dirname(__DIR__).'/../../bootstrap.php';
use App\Classes\Article;

$pants = new Article('pantalons ref '.rand(1,10000), rand(100, 1000), rand(15,150));
$shoes = new Article('chaussures ref '.rand(1,10000), rand(100,1000), rand(25, 200));
$entityManager->persist($pants);
$entityManager->persist($shoes);
$entityManager->flush();

echo 'Création avec succès avec des ID '.$pants->getId(). ' et '.$shoes->getId();