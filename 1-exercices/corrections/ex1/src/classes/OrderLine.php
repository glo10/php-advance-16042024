<?php

class OrderLine {
  private int $qty;
  private float $price;
  private Article $article;
  public function __construct(int $q, float $p, Article $a) {
    $this->qty = $q;
    $this->price = $p;
    $this->article = $a;
  }

  /**
   * Get the value of qty
   */
  public function getQty(): int
  {
    return $this->qty;
  }

  /**
   * Set the value of qty
   */
  public function setQty(int $qty): self
  {
    $this->qty = $qty;

    return $this;
  }

  /**
   * Get the value of price
   */
  public function getPrice(): float
  {
    return $this->price;
  }

  /**
   * Set the value of price
   */
  public function setPrice(float $price): self
  {
    $this->price = $price;

    return $this;
  }

  /**
   * Get the value of article
   */
  public function getArticle(): Article
  {
    return $this->article;
  }

  /**
   * Set the value of article
   */
  public function setArticle(Article $article): self
  {
    $this->article = $article;

    return $this;
  }
}