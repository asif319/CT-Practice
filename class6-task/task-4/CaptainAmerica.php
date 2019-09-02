<?php
include 'Avenger.php';
include 'Fight.php';
class CaptainAmerica extends Avenger implements Fight{

    public function fightingAbility(){
        echo "<h1> Captain America: </h1>
        Must Have to Known How to Fight With Local And Foreign Enemies. <br>
        -I Know Fighting. <br>
        ";
    }

    public function superpowerAbility(){
        echo "
        Must Have Some Superpowers, At Least One. <br>
        -I've Shield. <br>
        ";
    }

    public function senseOfHumor(){
        echo "
        Unfortunately They Should Have Sense Of Humor. <br>
        -I do not have. <br>
        ";
    }

    public function FlyingFighting(){
        echo " 
        I know Flying Fighting. <br>";
    }

    public function martialArt(){
        echo " 
        I'm Ex-Army <br>";
    }

    public function fightWithSuperpower(){
        echo " 
        I usually protect myself with my shield <br>";
    }
}