<?php
namespace App\Classes\Service;

use App\Interfaces\AddRemoveInterface;

class Service implements AddRemoveInterface {
  private int $id;
  private string $name;
  
  public function add() : void {
    echo 'add';
  }

  public function remove() : void {
    echo 'remove';
  }

  /**
   * Get the value of id
   */ 
  public function getId()
  {
    return $this->id;
  }

  /**
   * Set the value of id
   *
   * @return  self
   */ 
  public function setId($id)
  {
    $this->id = $id;

    return $this;
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
   *
   * @return  self
   */ 
  public function setName($name)
  {
    $this->name = $name;

    return $this;
  }
}