<?php

class Mib{

private $mibHero = "Asif";
private $mibHeroine = "Larson";
private $mibVillain = "Boris";



    public function SetHero($hero)
    {
        $this->mibHero = $hero;
        
    }

    public function GetHero(){

        $show = $this->mibHero;

        return $show;

    }

    public function SetHeroine($heroine)
    {
        $this->mibHeroine = $heroine;

    }

    public function GetHeroine(){

        $show = $this->mibHeroine;

        return $show;

    }

    public function SetVillain($villain)
    {
        $this->mibVillain = $villain;

    }

    public function GetVillain(){

        $show = $this->mibVillain;

        return $show;

    }

<<<<<<< HEAD
    public static function Bumbaa(){
        echo "Bumbaaaa <br>";
    }

    public static function Bumbaa2(){
        echo "Bumbaaaa2";
    }



=======
>>>>>>> b83248226c5e3c0b11f4712a936417d870e6aab0



}


?>