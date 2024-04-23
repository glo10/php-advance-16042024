<?php

namespace App\Classes;

use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity()]
#[ORM\Table(name: 'client')]
#[ORM\InheritanceType('JOINED')]
#[ORM\DiscriminatorColumn(name : 'kind', type : Types::STRING)] // colonne supplémentaire pour différencier le type de client
#[ORM\DiscriminatorMap(array(
  'b2c' => Customer::class,
  'b2b' => Company::class
))] // les valeurs possibles
abstract class CustomerAbstract {
  #[ORM\Id]
  #[ORM\GeneratedValue()]
  #[ORM\Column(type: 'integer')]
  private int $id;
  #[ORM\Column]
  protected string $name;
  #[ORM\Column]
  protected string $addr;
  #[ORM\OneToMany(targetEntity: Order::class, mappedBy: 'customer')]
  protected Collection $orders;

  public function getTypeOf() : string {
    return str_contains(get_class($this), 'Company') ? 'B2B': 'B2C';
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

  public function getAddr(): string
  {
    return $this->addr;
  }

  public function setAddr(string $addr): self
  {
    $this->addr = $addr;

    return $this;
  }

  public function getOrders(): array
  {
    return $this->orders;
  }

  public function setOrders(array $orders): self
  {
    $this->orders = $orders;

    return $this;
  }

  public function getId(): int
  {
    return $this->id;
  }
}