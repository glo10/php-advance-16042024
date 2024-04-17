<?php

class Company extends CustomerAbstract {
  private string $contact;
  private float $maxAmountCredit;

  public function editMonthBill(int $param) {}

  /**
   * Get the value of contact
   */
  public function getContact(): string
  {
    return $this->contact;
  }

  /**
   * Set the value of contact
   */
  public function setContact(string $contact): self
  {
    $this->contact = $contact;

    return $this;
  }

  /**
   * Get the value of maxAmountCredit
   */
  public function getMaxAmountCredit(): float
  {
    return $this->maxAmountCredit;
  }

  /**
   * Set the value of maxAmountCredit
   */
  public function setMaxAmountCredit(float $maxAmountCredit): self
  {
    $this->maxAmountCredit = $maxAmountCredit;

    return $this;
  }
}