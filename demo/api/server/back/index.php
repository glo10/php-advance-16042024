<?php
// Spécifie que c'est un document JSON pour aider le navigateur à comprendre le type de votre contenu
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *'); // On autorise des requêtes de tout le monde
// On image qu'on a récupéré via la BDD un user
$user = [
  'name' => 'Glodie',
  'email' => 'Tshimini',
  'age' => 32
];
$users = [
  [
    'name' => 'Thomas',
    'email' => 'Tim'
  ],
  [
    'name' => 'Glodie',
    'email' => 'Tshimini'
  ]
];
$users = json_encode($users);
$dt = new DateTime();
// Réponse à une requête d'un client HTTP en JSON
// transformer $user en PHP en JSON (string)
// var_dump($user, $dt); // un array
$user = json_encode($user);
$dt = json_encode($dt);
// var_dump($user, $dt, $users); // un string JSON
// réponse en JSON = un simple echo de votre réponse encodé en JSON
echo $users;