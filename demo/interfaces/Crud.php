<?php

// Contrat à remplir = définir les corps de toutes les méthodes de cette interface
interface Crud {
  function create():void;
  function read(): mixed;
  function update(): void;
  function delete(): void; 
}