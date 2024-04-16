<?php

abstract class Person {
  protected $name;

  protected function hello() {
    echo 'hello';
  }

  private function itsPrivate() {
    echo 'ADN';
  }
}