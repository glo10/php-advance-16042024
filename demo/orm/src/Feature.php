<?php

use Doctrine\ORM\Mapping as ORM;
#[ORM\Entity()]
#[ORM\Table(name: 'caracteristique')] // renommer la table, par defaut c'est le nom de la classe
class Feature {
  #[ORM\Id]
  #[ORM\GeneratedValue()]
  #[ORM\Column(name: 'integer')]
  private int $id;
  #[ORM\Column()]
  private string $name;
  #[ORM\Column()]
  private string $description;
  #[ORM\Column()]
  private string $slug;
  #[ORM\Column()]
  private string $comment;
  #[ORM\Column(type: 'boolean', nullable: true)]
  private bool $isPrivate;
}