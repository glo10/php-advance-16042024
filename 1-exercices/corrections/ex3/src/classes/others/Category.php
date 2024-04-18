<?php
namespace App\Classes\Others;

use App\Interfaces\AddRemoveInterface;

class Category implements AddRemoveInterface {
  public function __construct(
    private int $id,
    private string $name,
    private string $type
  ) {}

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
 
  public function getName()
  {
    return $this->name;
  }

  public function setName($name)
  {
    $this->name = $name;
    return $this;
  }

  public function getType()
  {
    return $this->type;
  }

  public function setType($type)
  {
    $this->type = $type;
    return $this;
  }
}