<?php

class Recipe implements Crud, Actions {
  // ne dépend pas des instances (objets), dépend directement de la classe Recipe
  // délcaration d'un propriété ou méthode statique avec le mot-clé static devant le nom de la prop. ou meth.
  public static int $counter = 0; // propriété de la classe
  private int $duration; // propriété de l'objet

  public function __construct()
  {
    self::$counter++;
  }
  function do() : void {
    echo 'miam';
  }
  function create () :void {
    echo 'ok';
  }
  function read() {
    echo 'recipe';
  }
  function update(): void
  {
    echo 'ok';
  }
  function delete(): void
  {
    echo 'finished';
  }

  /**
   * Get the value of duration
   */
  public function getDuration(): int
  {
    return $this->duration;
  }

  /**
   * Set the value of duration
   */
  public function setDuration(int $duration): self
  {
    $this->duration = $duration;

    return $this;
  }
}

$cake = new Recipe(); // counter = 1
$banana = new Recipe(); // counter = 2

echo Recipe::$counter; // 2 ici