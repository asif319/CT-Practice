<?php
include 'CaptainAmerica.php';
include 'Ironman.php';
include 'Loki.php';

$ca = new CaptainAmerica();

$ca->fightingAbility();
$ca->superpowerAbility();
$ca->senseOfHumor();
$ca->flyingFighting();
$ca->martialArt();
$ca->fightWithSuperpower();


$im = new Ironman();

$im->fightingAbility();
$im->superpowerAbility();
$im->senseOfHumor();
$im->flyingFighting();
$im->martialArt();
$im->fightWithSuperpower();

$loki = new Loki();

$loki->fightingAbility();
$loki->superpowerAbility();
$loki->senseOfHumor();
$loki->flyingFighting();
$loki->martialArt();
$loki->fightWithSuperpower();