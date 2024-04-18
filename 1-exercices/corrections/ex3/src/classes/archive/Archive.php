<?php
namespace App\Classes\Archive;

use App\Classes\Office\Counter;
use App\Classes\Others\Category;
use App\Classes\Service\Service;
use App\Classes\User\User;
use App\Interfaces\AddRemoveInterface;
use App\Interfaces\CreateFindInterface;
use App\Interfaces\UpdateInterface;
use DateTime;

/**
 * Les interfaces sont des contrats, à partir du moment ou une classe implémente une interface, elle doit remplir le contrat
 * cad écrire les codes des méthodes définis dans l'interface
 * De plus, l'interface permet à une classe d'avoir des nouvelles fonctionnalités (méthodes) qu'elle pourra implémenter à sa manière
 * Une voiture, une personne et un ordinateur peuvent implémenter une même interface dont par exemple
 * le contrat est run(méthode sans corps), une personne pourra l'implémenter en marchant, une voiture en démarrant le moteur
 * et un ordinateur en s'allumant
 */
class Archive implements AddRemoveInterface, UpdateInterface, CreateFindInterface {
  // Nouvelle notation PHP8 qui premet de déclarer directement les propriétés dans les paramètres du constructeur
  public function __construct(
    private int $id,
    private string $name,
    private DateTime $date,
    private int $size,
    private Service $service,
    private Category $category,
    private User $user,
    private Counter $counter
  ) {}
    
  public function create() : void {
    echo 'create a new archive';
  }

  public function add() : void {
    echo 'add';
  }

  public function remove() : void {
    echo 'remove';
  }

  public function update() : void {
    echo 'update';
  }

  public function find() : void {
    echo 'find';
  }

  public function getId()
  {
    return $this->id;
  }

  public function setId(int $id)
  {
    $this->id = $id;
    return $this;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setName(string $name)
  {
    $this->name = $name;
    return $this;
  }

  public function getDate()
  {
    return $this->date;
  }

  public function setDate(Datetime $date)
  {
    $this->date = $date;
    return $this;
  }
 
  public function getSize()
  {
    return $this->size;
  }

  public function setSize(int $size)
  {
    $this->size = $size;
    return $this;
  }

  public function getService()
  {
    return $this->service;
  }
 
  public function setService(Service $service)
  {
    $this->service = $service;
    return $this;
  }

  public function getCategory()
  {
    return $this->category;
  }

  public function setCategory(Category $category)
  {
    $this->category = $category;
    return $this;
  }

  public function getUser()
  {
    return $this->user;
  }

  public function setUser(User $user)
  {
    $this->user = $user;
    return $this;
  }

  public function getCounter()
  {
    return $this->counter;
  }

  public function setCounter(Counter $counter)
  {
    $this->counter = $counter;
    return $this;
  }
}