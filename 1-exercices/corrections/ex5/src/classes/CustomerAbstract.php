<?php

namespace App\Classes;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity()]
#[ORM\Table(name: 'client')] // nom de la table par defaut c'est le nom de la classe
#[ORM\InheritanceType('JOINED')] // stratégie pour l'héritage ici une table pour chaque entité
#[ORM\DiscriminatorColumn(name : 'kind', type : Types::STRING)] // colonne supplémentaire pour différencier le type de client
#[ORM\DiscriminatorMap(array(
  'b2c' => Customer::class,
  'b2b' => Company::class
))] // les valeurs possibles (dépend du nombre de classes filles, ici 2)
abstract class CustomerAbstract {
  #[ORM\Id]
  #[ORM\GeneratedValue()]
  #[ORM\Column(type: 'integer')]
  private int $id;
  #[ORM\Column]
  protected string $name;
  #[ORM\Column]
  protected string $addr;
  #[ORM\OneToMany(targetEntity: Order::class, mappedBy: 'customer')] // 1 client peut avoir plusieurs commandes
  protected Collection $orders; // Type Collection vient de Doctrine, vous aurez pu mettre array à la place, le type Collection apporte des méthodes supplémentaire pour l'ajout et suppression

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

  public function getOrders(): ArrayCollection
  {
    return $this->orders;
  }

  public function setOrders(ArrayCollection $orders): self
  {
    $this->orders = $orders;

    return $this;
  }
}