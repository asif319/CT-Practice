<?php

include 'Mib.php';

$name = new Mib();

$name->SetHero("Asifur");

echo $name->GetHero() . "<br>";

$name->SetHeroine("Jorina");

echo $name->GetHeroine() . "<br>";

<<<<<<< HEAD
$name->SetVillain("Misha") ;

echo $name->GetVillain() . "<br>";

Mib::Bumbaa();

Mib::Bumbaa2();
=======
$name->SetVillain("Misha");

echo $name->GetVillain();
>>>>>>> b83248226c5e3c0b11f4712a936417d870e6aab0
?>