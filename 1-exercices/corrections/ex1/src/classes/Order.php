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