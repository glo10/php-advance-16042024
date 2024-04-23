<?php

namespace App\Classes;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
class Company extends CustomerAbstract {
  #[ORM\Column(type: 'string')]
  private string $contact;
  #[ORM\Column(type: 'float')]
  private float $maxAmountCredit;
  public function __construct(string $name, string $addr, string $contact, float $max)
  {
    $this->name = $name;
    $this->addr = $addr;
    $this->contact = $contact;
    $this->maxAmountCredit = $max;
  }
  public function editMonthBill(int $param) {}

  public function getContact(): string
  {
    return $this->contact;
  }

  public function setContact(string $contact): self
  {
    $this->contact = $contact;

    return $this;
  }

  public function getMaxAmountCredit(): float
  {
    return $this->maxAmountCredit;
  }

  public function setMaxAmountCredit(float $maxAmountCredit): self
  {
    $this->maxAmountCredit = $maxAmountCredit;

    return $this;
  }
}