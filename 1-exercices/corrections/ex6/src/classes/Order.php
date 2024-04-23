<?php

namespace App\Classes;

use DateTime;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: 'purchase')]
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
  #[ORM\OneToMany(targetEntity: OrderLine::class, mappedBy:'order', cascade:['persist'])]
  private Collection $orderLines;
  #[ORM\ManyToOne(targetEntity: CustomerAbstract::class, inversedBy: 'orders')]
  private CustomerAbstract $customer;
  public function __construct(string $number, CustomerAbstract $customer, array $lines = array()) {
    $this->number = $number;
    $this->createAt = new DateTime();
    $this->customer = $customer;
    $this->orderLines = new ArrayCollection($lines);
  }

  public function computeTotalPrice() {
    $total = 0;
    foreach($this->orderLines as $line) {
      $total += $line->getPrice();
    }
    $this->setPrice(round($total, 2)); // idem que de faire $this->price = $price;
  }

  public function addLine(OrderLine $line) {
    $line->setOrder($this);
    $this->orderLines->add($line);
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

  public function getOrderLines(): array
  {
    return $this->orderLines;
  }

  public function setOrderLines(array $orderLines): self
  {
    $this->orderLines = $orderLines;
    $this->sortOrderLines();
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
}