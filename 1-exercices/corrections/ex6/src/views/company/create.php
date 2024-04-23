<?php

require_once dirname(__DIR__).'/../../bootstrap.php';
use App\Classes\Company;

$sas = new Company('Company SAS capital '.rand(1000, 9999999), 'USA', 'Bezos', rand(10000000, 99999999));
$sarl = new Company('Company SARL capital '.rand(1000, 99999), 'Bordeaux', 'Macron', 0);
$entityManager->persist($sas);
$entityManager->persist($sarl);
$entityManager->flush();

echo 'Création avec succès avec des ID '.$sas->getId(). ' et '.$sarl->getId();