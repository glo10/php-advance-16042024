<?php

class Customer extends Person implements Crud, Actions {
  private int $age;

  public function __construct(string $name, int $age = 18) {
    $this->name = $name;
    $this->age = $age;
  }

  protected function hello() {
    echo 'Bonjour';
  }
  function do() : void {
    echo 'done';
  }
  function create () :void {
    echo 'create';
  }
  function read() {
    echo 'read';
  }
  function update(): void
  {
    echo 'update';
  }
  function delete(): void
  {
    echo 'delete';
  }

  /**
   * Get the value of age
   */
  public function getAge(): int
  {
    return $this->age;
  }

  /**
   * Set the value of age
   */
  public function setAge(int $age): self
  {
    $this->age = $age;

    return $this;
  }
}

$glodie = new Customer('Glodie', 32);
$tom = new Customer('Tom', 45);
$helene = new Customer('Hélène');

unset($tom); // __destruct() sera appelée automatique