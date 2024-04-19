<?php

use Doctrine\ORM\Mapping as ORM;
#[ORM\Entity()]
class Product {
  #[ORM\Id]
  #[ORM\GeneratedValue()]
  #[ORM\Column(name: 'integer')]
  private int $id;
  #[ORM\Column()]
  private string $name;
  #[ORM\Column()]
  private string $reference;
}