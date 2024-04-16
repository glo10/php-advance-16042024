<?php

abstract class Person {
  protected $name;

  protected function hello() {
    echo 'hello';
  }

  private function itsPrivate() {
    echo 'ADN';
  }

  /**
   * Get the value of name
   */
  public function getName()
  {
    return $this->name;
  }

  /**
   * Set the value of name
   */
  public function setName($name): self
  {
    $this->name = $name;

    return $this;
  }
}