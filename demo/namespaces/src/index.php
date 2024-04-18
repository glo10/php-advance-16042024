<?php

require_once '../vendor/autoload.php';
// use permet de dire que la classe HTML est importée
// depuis le namespace App\Views\Html;

use App\Controller;
use App\Views\HTML;

$html = new HTML();
$parameters = new Controller();
