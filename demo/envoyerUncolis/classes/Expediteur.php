<?php
require_once 'Personne.php';
class Expediteur extends Personne {
  /**
   * On n'a défini des propriétés ici mais il hérite de nom, prenom et adresse de la classe Personne
   * Si la classe Personne avait des propriétés privées, Expediteur n'aurait pas accès à ses propriétés
   */
  // méthode magique dont l'objectif est d'instancier votre objet avec des données en entrée que vous êtes libre de définir à votre convenance
  public function __construct(
    string $nom,
    string $prenom,
    string $adresse)
    {
      $this->nom = $nom; 
      $this->prenom = $prenom;
      $this->adresse = $adresse ;
    }
  public function creerColis(
    int $longueur,
    int $largeur,
    int $poids
    ) {
      echo 'Colis crée avec les dimensions '.
      $longueur.'*'.$largeur.' et qui pèse'.$poids;
  }

  public function envoyerColis(Colis $colis) {
    echo 'Colis envoyé avec les dimensions L*l '.
    $colis->getLongueur(). ' * '.$colis->getLargeur().
    'cm et le poids de '.
    $colis->getPoids(). 'g';
  }
}