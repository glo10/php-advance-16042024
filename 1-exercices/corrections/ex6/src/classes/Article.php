<?php
namespace App\Classes;

use Doctrine\Common\Collections\Collection;
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
  public function __construct(string $name, int $q, float $price) {
    $this->name = $name;
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

  public function getLines(): array
  {
    return $this->lines;
  }

  public function setLines(array $lines): self
  {
    $this->lines = $lines;

    return $this;
  }

  public function getId(): int
  {
    return $this->id;
  }

  public function setId(int $id): self
  {
    $this->id = $id;
    return $this;
  }
}