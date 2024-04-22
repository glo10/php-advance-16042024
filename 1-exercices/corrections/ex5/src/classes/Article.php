<?php
namespace App\Classes;

use Doctrine\ORM\Mapping as ORM;
#[ORM\Entity]
class Article {
  #[ORM\Id]
  #[ORM\GeneratedValue()]
  #[ORM\Column(type: 'integer')]
  private int $id;
  #[ORM\Column(type: 'string')]
  private string $name;
  #[ORM\Column(type: 'integer')]
  private int $qty;
  #[ORM\Column(type: 'float')]
  private float $unitPrice;
  public function __construct(int $q, float $price) {
    $this->qty = $q;
    $this->unitPrice = $price;
  }

  public function getName(): string
  {
    return $this->name;
  }

  public function setName(string $name): self
  {
    $this->name = $name;
    return $this;
  }

  public function getQty(): int
  {
    return $this->qty;
  }

  public function setQty(int $qty): self
  {
    $this->qty = $qty;
    return $this;
  }

  public function getUnitPrice(): float
  {
    return $this->unitPrice;
  }

  public function setUnitPrice(float $unitPrice): self
  {
    $this->unitPrice = $unitPrice;
    return $this;
  }
}