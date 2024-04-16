<?php

class Customer extends Person implements Crud, Actions {
  function do() : void {
    echo 'done';
  }
  function create () :void {
    echo 'create';
  }
  function read() {
    echo 'read';
  }
  function update(): void
  {
    echo 'update';
  }
  function delete(): void
  {
    echo 'delete';
  }
}