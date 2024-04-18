<?php
namespace App\Classes\Others;

use AddRemoveInterface;

class Sector implements AddRemoveInterface {
  private int $id;
  private string $name;
  private string $city;

  public function add() : void {
    echo 'add';
  }

  public function remove() : void {
    echo 'remove';
  }

  public function getId()
  {
    return $this->id;
  }

  public function setId($id)
  {
    $this->id = $id;
    return $this;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setName($name)
  {
    $this->name = $name;
    return $this;
  }

  public function getCity()
  {
    return $this->city;
  }

  public function setCity($city)
  {
    $this->city = $city;
    return $this;
  }
}