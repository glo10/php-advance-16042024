<?php
namespace App\Classes\Office;

use App\Classes\Others\Sector;

class Desk extends OfficeAbstract {
  private Sector $sector;
  public function add() : void {
    echo 'add';
  }

  public function remove() : void {
    echo 'remove';
  }

  public function getSector()
  {
    return $this->sector;
  }

  public function setSector(Sector $sector)
  {
    $this->sector = $sector;
    return $this;
  }
}