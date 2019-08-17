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




}


?>