<?php

class Transporteur extends Personne {
  private bool $estDisponible;

  public function __construct(string $nom, string $prenom, string $adresse, $estDisponible = true)
  {
    $this->nom = $nom;
    $this->prenom = $prenom;
    $this->adresse = $adresse;
    $this->estDisponible = $estDisponible;
  }

  public function livrerColis(Colis $colis) {
    echo 'je livre le colis dont la largeur est de '.$colis->getLargeur();
  }

  public function testerDisponible() : bool{
    return true;
  }
  
  public function scanner(Colis $colis) {
    $currentDate = new DateTime();
    $dateFormat = $currentDate->format('d/m/y H:i:s');
    echo $this->send(
      'Votre colis dont le poids est '.
      $colis->getPoids().
      ' a été scannée à '.
      $dateFormat. ' par '.$this->getPrenom());
  }

  public function planifierLivraison(Colis $colis) {
    echo 'Itinéraire pour le colis de longueur '.$colis->getLongueur(). ' a été planifié par '.$this->getPrenom();
  }

  /**
   * Get the value of estDisponible
   */
  public function isEstDisponible(): bool
  {
    return $this->estDisponible;
  }

  /**
   * Set the value of estDisponible
   */
  public function setEstDisponible(bool $estDisponible): self
  {
    $this->estDisponible = $estDisponible;

    return $this;
  }
}