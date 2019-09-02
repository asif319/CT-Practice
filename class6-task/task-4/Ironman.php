<?php



class Ironman extends Avenger implements Fight
{
    public function fightingAbility(){
        echo " <h1> Iron Man: </h1>
        Must Have to Known How to Fight With Local And Foreign Enemies. <br>
        -I Know how to Fighting. <br>
        ";
    }

    public function superpowerAbility(){
        echo "
        Must Have Some Superpowers, At Least One. <br>
        -I've Suit. <br>
        ";
    }

    public function senseOfHumor(){
        echo "
        Unfortunately They Should Have Sense Of Humor. <br>
        -I certainly have. <br>
        ";
    }

    public function FlyingFighting(){
        echo "I know Flying Fighting. <br>";
    }

    public function martialArt(){
        echo "I'm Ex-Army. <br>";
    }

    public function fightWithSuperpower(){
        echo "My Suit is My Power. (May be superpower. <br>";
    }

}