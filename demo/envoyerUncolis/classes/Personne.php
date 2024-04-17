<?php

abstract class Personne {
  protected string $nom;
  protected string $prenom;
  protected string $adresse;

  /**
   * Get the value of nom
   */
  public function getNom(): string
  {
    return $this->nom;
  }

  /**
   * Set the value of nom
   */
  public function setNom(string $nom): self
  {
    $this->nom = $nom;

    return $this;
  }

  /**
   * Get the value of prenom
   */
  public function getPrenom(): string
  {
    return $this->prenom;
  }

  /**
   * Set the value of prenom
   */
  public function setPrenom(string $prenom): self
  {
    $this->prenom = $prenom;

    return $this;
  }

  /**
   * Get the value of adresse
   */
  public function getAdresse(): string
  {
    return $this->adresse;
  }

  /**
   * Set the value of adresse
   */
  public function setAdresse(string $adresse): self
  {
    $this->adresse = $adresse;

    return $this;
  }
}