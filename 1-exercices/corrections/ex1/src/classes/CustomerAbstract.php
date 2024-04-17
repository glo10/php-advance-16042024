<?php

abstract class CustomerAbstract {
  protected string $name;
  protected string $addr;
  protected array $orders;

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
   * Get the value of addr
   */
  public function getAddr(): string
  {
    return $this->addr;
  }

  /**
   * Set the value of addr
   */
  public function setAddr(string $addr): self
  {
    $this->addr = $addr;

    return $this;
  }

  /**
   * Get the value of orders
   */
  public function getOrders(): array
  {
    return $this->orders;
  }

  /**
   * Set the value of orders
   */
  public function setOrders(array $orders): self
  {
    $this->orders = $orders;

    return $this;
  }
}