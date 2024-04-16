<?php
require_once '../ex1/Personne.php';
class Expediteur extends Personne {
  public function __construct(string $nom, $prenom, $adresse)
  {
    $this->nom = $nom;
    $this->prenom = $prenom;
    $this->adresse = $adresse;
  }
  public function creerColis(int $long, int $larg, int $poids) {
    echo $this->send(
      'Un expéditeur a pris en charge votre colis avec les dimensions longueur : '
      .$long. ', largeur : '.$larg. ', poid : '.$poids
    );
    echo 'Colis crée';
  }

  public function envoyerColis(Colis $colis) {
    echo $this->send($this->getNom().' a envoyé votre colis');
    echo 'Colis envoyé';
  }
}