<?php

namespace App\Classes;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
class Customer extends CustomerAbstract {
  #[ORM\Column()]
  private string $creditCardNumber;
  public function __construct(string $name, string $addr, int $cbNumber) {
    $this->name = $name;
    $this->addr = $addr;
    $this->creditCardNumber = $cbNumber;
  }

  public function getCreditCardNumber(): string
  {
    return $this->creditCardNumber;
  }

  public function setCreditCardNumber(string $creditCardNumber): self
  {
    $this->creditCardNumber = $creditCardNumber;

    return $this;
  }
}