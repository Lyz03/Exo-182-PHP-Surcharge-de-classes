<?php

// J'inclue mes deux classes ici, faites bien attention à l'ordre d'inclusion, comme la classe dragon hérite de la classe
// personnage, je dois inclure la classe personnage avant d'inclure la classe dragon
// TODO attention, certaines erreurs volontaires ont pu être glissées, a vous de vérifier ! Ce message en lui même est peut être un piège :-)
require "classes/Personnage.php";
require "classes/Dragon.php";
require "classes/Princesse.php";
require "classes/Sorcier.php";

// Creation d'une instance de la classe personnage
$humain = new Personnage();
$humain -> setNom("Votre nom");
echo $humain -> getNom() . '<br>';
$humain -> setId('humainId');
echo $humain -> getId() . '<br>';

echo '<br><br>';

// Creation d'une instance de la classe dragon
$dragon = new Dragon();
$dragon->setNom("Dragon");
echo $dragon -> getNom() . '<br>';
$dragon -> setId('dragonId');
echo $dragon -> getId() . '<br>';

echo '<br><br>';

// Création d'une instance de la classe princesse
$princesse = new Princesse();
$princesse->setNom("Princesse");
echo $princesse -> getNom() . '<br>';
$princesse -> setId('princesseId');
echo $princesse -> getId() . '<br>';

echo '<br><br>';

// Creation d'une instance de la classe sorcier
$sorcier = new Sorcier();
$sorcier->setNom("Sorcier");
echo $sorcier -> getNom() . '<br>';
$sorcier -> setId('sorcierId');
echo $sorcier -> getId() . '<br>';
