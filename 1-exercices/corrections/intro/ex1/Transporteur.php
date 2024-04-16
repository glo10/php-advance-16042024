<?php

class Transporteur extends Personne {
  private bool $estDisponible;
  public function livrerColis(Colis $colis) {}
  public function testerDisponible() : bool{}
  public function scanner(Colis $colis) {}
  public function planifierLivraison(Colis $colis) {}
}