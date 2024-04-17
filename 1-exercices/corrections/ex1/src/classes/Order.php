<?php

class Order {
  private DateTime $createAt;
  private string $number;
  private float $price;
  private array $orderLines;
  private CustomerAbstract $customer;
  public function __construct(string $number, float $price, array $orderLines, CustomerAbstract $customer) {
    $this->number = $number;
    $this->price = $price;
    $this->orderLines = $orderLines;
    $this->createAt = new DateTime();
    $this->customer = $customer;
  }
  public function sold() : void {}

  /**
   * Get the value of createAt
   */
  public function getCreateAt(): DateTime
  {
    return $this->createAt;
  }

  /**
   * Set the value of createAt
   */
  public function setCreateAt(DateTime $createAt): self
  {
    $this->createAt = $createAt;

    return $this;
  }

  /**
   * Get the value of number
   */
  public function getNumber(): string
  {
    return $this->number;
  }

  /**
   * Set the value of number
   */
  public function setNumber(string $number): self
  {
    $this->number = $number;

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
   * Get the value of orderLines
   */
  public function getOrderLines(): array
  {
    return $this->orderLines;
  }

  /**
   * Set the value of orderLines
   */
  public function setOrderLines(array $orderLines): self
  {
    $this->orderLines = $orderLines;

    return $this;
  }

  /**
   * Get the value of customer
   */
  public function getCustomer(): CustomerAbstract
  {
    return $this->customer;
  }

  /**
   * Set the value of customer
   */
  public function setCustomer(CustomerAbstract $customer): self
  {
    $this->customer = $customer;

    return $this;
  }
}