<?php

class Colis {
  private int $longueur;
  private int $largeur;
  private int $poids;
  private string $etat;

  /**
   * Get the value of longueur
   */
  public function getLongueur(): int
  {
    return $this->longueur;
  }

  /**
   * Set the value of longueur
   */
  public function setLongueur(int $longueur): self
  {
    $this->longueur = $longueur;

    return $this;
  }

  /**
   * Get the value of largeur
   */
  public function getLargeur(): int
  {
    return $this->largeur;
  }

  /**
   * Set the value of largeur
   */
  public function setLargeur(int $largeur): self
  {
    $this->largeur = $largeur;

    return $this;
  }

  /**
   * Get the value of poids
   */
  public function getPoids(): int
  {
    return $this->poids;
  }

  /**
   * Set the value of poids
   */
  public function setPoids(int $poids): self
  {
    $this->poids = $poids;

    return $this;
  }

  /**
   * Get the value of etat
   */
  public function getEtat(): string
  {
    return $this->etat;
  }

  /**
   * Set the value of etat
   */
  public function setEtat(string $etat): self
  {
    $this->etat = $etat;

    return $this;
  }
}