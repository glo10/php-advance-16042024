<?php

require_once dirname(__DIR__).'/../../bootstrap.php';
use App\Classes\Customer;

$c1 = new Customer('Louis '.rand(1, 100), 'Lille', rand(10000, 9999999999999));
$c2 = new Customer('Marie-Antoinette '.rand(1, 100), 'Nantes', rand(10000, 9999999999999));
$entityManager->persist($c1);
$entityManager->persist($c2);
$entityManager->flush();
echo 'Création avec succès avec des ID '.$c1->getId(). ' et '.$c2->getId();