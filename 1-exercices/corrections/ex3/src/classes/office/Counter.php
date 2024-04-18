<?php
namespace App\Classes\Office;

class Counter extends OfficeAbstract {
  private Desk $desk;
  public function add() : void {
    echo 'add';
  }

  public function remove() : void {
    echo 'remove';
  }

  public function getDesk()
  {
    return $this->desk;
  }
  
  public function setDesk($desk)
  {
    $this->desk = $desk;

    return $this;
  }
}