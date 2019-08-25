<?php

include 'Mib.php';

$name = new Mib();

$name->SetHero("Asifur");

echo $name->GetHero() . "<br>";

$name->SetHeroine("Jorina");

echo $name->GetHeroine() . "<br>";

$name->SetVillain("Misha") ;

echo $name->GetVillain() . "<br>";

Mib::Bumbaa();

Mib::Bumbaa2();
?>