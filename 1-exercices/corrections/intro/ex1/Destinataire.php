<?php
require_once '../ex1/Personne.php';
class Destinataire extends Personne {
  public function __construct(string $nom, $prenom, $adresse)
  {
    $this->nom = $nom;
    $this->prenom = $prenom;
    $this->adresse = $adresse;
  }
  
  public function terminerLivraison(Colis $colis) {
    echo $this->send('Colis livrée de largeur '.$colis->getLargeur());
    echo 'Livraison terminée';
  }

  public function suivreColis() {
    echo $this->getPrenom(). ' '. $this->getNom(). ' a suivi le colis à destination de '.$this->getAdresse();
  }
}