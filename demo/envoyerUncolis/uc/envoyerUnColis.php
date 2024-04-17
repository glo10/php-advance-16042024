<?php
require_once '../classes/Expediteur.php';
require_once '../classes/Colis.php';
/**
 * Cas d'utilisation = fonctionnalité (implique un ou plusieurs acteurs et un ou plusieurs méthodes)
 * Un expéditeur envoie un colis
 */

/**
 * Création d'un objet avec un Constructeur qui permet d'affecter des valeurs dès le départ
 * instanciation d'un objet de type Expiditeur
 */
$glodie = new Expediteur('Tshimini', 'Glodie', 'Paris'); // 
var_dump($glodie);

/**
 * Création d'un objet sans construteur, pour remplir les valeurs il faut passer par les setters
 * On crée un colis parce que la méthode envoyerColis de la classe Expéditeur a besoin d'un colis en paramètre
 * Sans constructeur, on aura besoin des setters pour initialiser nos infos (longueur, largeur, etc.)
 */
$lettre = new Colis();
/**
 * setters = mutateurs = modification de la valeur d'une propriété
 * 1 propriété = 1 setter sauf pour l'ID (généralement pour les ids on ne met pas de setter pour éviter qu'on puisse modifier sa valeur)
 */
$lettre->setLongueur(10);
$lettre->setLargeur(5);
$lettre->setPoids(12);
var_dump($lettre);
/**
 * getters = accesseurs = récupérer la valeur d'une propriété
 * 1 propriété = 1 getter
 */
$glodie->envoyerColis($lettre);