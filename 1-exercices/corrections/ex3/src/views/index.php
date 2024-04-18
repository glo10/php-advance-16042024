<?php
// Pas besoin de namespace ici, on n'a pas de classe déclarée
use App\Classes\Archive\Archive;// classe Archive depuis le namespace App\Classes\Archive, idem pour les autres
use App\Classes\Office\Counter;
use App\Classes\Others\Category;
use App\Classes\Service\Service;
use App\Classes\User\User;

/**
 * @see https://www.php.net/manual/fr/function.dirname.php
 * @see https://www.php.net/manual/fr/language.constants.magic.php
 */
require_once dirname(__DIR__).'/../vendor/autoload.php';

$archive = new Archive(
  1,
  'Archive 1',
  new DateTime(), //@see https://www.php.net/manual/fr/datetime.construct.php
  40,
  new Service(),
  new Category(1, 'category', 'type'),
  new User(1, 'Tshimini', 'Glodie', '01/01/1970', 'Marseille'),
  new Counter()
);

$archive->create();
