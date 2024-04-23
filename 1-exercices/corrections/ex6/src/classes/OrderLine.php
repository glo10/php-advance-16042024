<?php
namespace App\Classes;
use Doctrine\ORM\Mapping as ORM;
#[ORM\Entity]
class OrderLine {
  #[ORM\Id]
  #[ORM\GeneratedValue()]
  #[ORM\Column(type: 'integer')]
  private int $id;
  #[ORM\Column(type: 'integer')]
  private int $qty;
  #[ORM\Column(type: 'float')]
  private float $price;
  #[ORM\ManyToOne(targetEntity:Article::class)]
  private Article $article;
  #[ORM\ManyToOne(targetEntity: Order::class, inversedBy: 'orderLines')]
  private Order $order;
  public function __construct(int $q, Article $a) {
    $this->qty = $q;
    $this->article = $a;
  }

  public function computePrice() {
    // Le prix d'une ligne de commande = quantité voulue * prix unitaire de l'article choisi
    $this->price = round($this->qty * $this->article->getUnitPrice(), 2);
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

  public function getPrice(): float
  {
    return $this->price;
  }

  public function setPrice(float $price): self
  {
    $this->price = $price;
    return $this;
  }

  public function getArticle(): Article
  {
    return $this->article;
  }

  public function setArticle(Article $article): self
  {
    $this->article = $article;
    return $this;
  }

  public function setOrder(Order $o) {
    $this->order = $o;
  }

  public function getOrder() : Order {
    return $this->order;
  }
}