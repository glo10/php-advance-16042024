<?php

class Article {
  private string $name;
  private int $qty;
  private float $unitPrice;
  private array $lines = array();
  public function __construct(int $q, float $price) {
    $this->qty = $q;
    $this->unitPrice = $price;
  }

  /**
   * Get the value of name
   */
  public function getName(): string
  {
    return $this->name;
  }

  /**
   * Set the value of name
   */
  public function setName(string $name): self
  {
    $this->name = $name;

    return $this;
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
   * Get the value of unitPrice
   */
  public function getUnitPrice(): float
  {
    return $this->unitPrice;
  }

  /**
   * Set the value of unitPrice
   */
  public function setUnitPrice(float $unitPrice): self
  {
    $this->unitPrice = $unitPrice;

    return $this;
  }

  /**
   * Get the value of lines
   */
  public function getLines(): array
  {
    return $this->lines;
  }

  /**
   * Set the value of lines
   */
  public function setLines(array $lines): self
  {
    $this->lines = $lines;

    return $this;
  }
}