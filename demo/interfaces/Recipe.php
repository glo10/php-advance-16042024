<?php

class Recipe implements Crud, Actions {
  function do() : void {
    echo 'miam';
  }
  function create () :void {
    echo 'ok';
  }
  function read() {
    echo 'recipe';
  }
  function update(): void
  {
    echo 'ok';
  }
  function delete(): void
  {
    echo 'finished';
  }
}