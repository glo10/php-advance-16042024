<?php
require_once '../ex1/Personne.php';
class Gestionnaire extends Personne {
  public function __construct(string $nom, $prenom, $adresse)
  {
    $this->nom = $nom;
    $this->prenom = $prenom;
    $this->adresse = $adresse;
  }

  public function visualiserColis(Colis $colis) {
    echo 'Je visualise un colis qui a les caractéristiques suivantes : <br>Longueur '
    .$colis->getLongueur(). '<br>Largeur : '.$colis->getLongueur(). '<br>Poids : '.
    $colis->getPoids();
  }

  public function visualiserHistorique() {
    echo 'Historique des colis<br>';
  }
}