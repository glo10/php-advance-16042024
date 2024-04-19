<?php
require_once "vendor/autoload.php";

use Doctrine\DBAL\DriverManager;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\ORMSetup;


// Create a simple "default" Doctrine ORM configuration for Attributes
$config = ORMSetup::createAttributeMetadataConfiguration(
    paths: array(__DIR__."/src"),// le dossier ou vont se trouver nos classes à mapper (entités)
    isDevMode: true,
);

// configuring the database connection
$connection = DriverManager::getConnection(
[
    'driver'    => 'pdo_mysql', // moteur de base de données (BDD)
    'user'      => 'root', // utilisateur de BDD
    'password'  => '', // mot de passe de l'utilisateur BDD
    'dbname'    => 'demo-orm', // Nom de votre BDD
    'port'      => 3308 // Port ou tourne votre moteur de BDD
  ],
  $config
);

// obtaining the entity manager
$entityManager = new EntityManager($connection, $config);