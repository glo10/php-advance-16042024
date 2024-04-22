<?php

namespace App\Classes;

use DateTime;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
class Order {
  #[ORM\Id]
  #[ORM\GeneratedValue()]
  #[ORM\Column(type: 'integer')]
  private int $id;
  #[ORM\Column(type: 'datetime')]
  private DateTime $createAt;
  #[ORM\Column]
  private string $number;
  #[ORM\Column(type: 'float')]
  private float $price;
  #[ORM\OneToMany(targetEntity: OrderLine::class, mappedBy:'order')] // 1 commande possède plusieurs lignes de commande
  private Collection $lines;
  #[ORM\ManyToOne(targetEntity: CustomerAbstract::class, inversedBy: 'orders')] // Plusieurs commandes sont affectées à un client
  private CustomerAbstract $customer;
  public function __construct(string $number, CustomerAbstract $customer) {
    $this->number = $number;
    $this->createAt = new DateTime();
    $this->customer = $customer;
  }

  public function computeTotalPrice() {
    $total = 0;
    foreach($this->orderLines as $line) {
      $total += $line->getPrice();
    }
    $this->setPrice($total); // idem que de faire $this->price = $price;
  }

  public function sold() : void {}

  public function getCreateAt(): DateTime
  {
    return $this->createAt;
  }

  public function setCreateAt(DateTime $createAt): self
  {
    $this->createAt = $createAt;
    return $this;
  }

  public function getNumber(): string
  {
    return $this->number;
  }

  public function setNumber(string $number): self
  {
    $this->number = $number;
    return $this;
  }

  public function getPrice(): float
  {
    return $this->price;
  }

  public function setPrice(float $price): self
  {
    $this->price = $price;
    return $this;
  }

  public function getCustomer(): CustomerAbstract
  {
    return $this->customer;
  }

  public function setCustomer(CustomerAbstract $customer): self
  {
    $this->customer = $customer;
    return $this;
  }

  public function getLines(): Collection
  {
    return $this->lines;
  }

  public function setLines(Collection $lines): self
  {
    $this->lines = $lines;
    return $this;
  }
}