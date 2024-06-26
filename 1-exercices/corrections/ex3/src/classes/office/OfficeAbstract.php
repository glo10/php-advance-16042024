<?php
namespace App\Classes\Office;

use App\Interfaces\AddRemoveInterface;

abstract class OfficeAbstract implements AddRemoveInterface {
  protected int $id;
  protected string $name;

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
}