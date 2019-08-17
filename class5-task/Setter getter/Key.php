<?php

class Key{

private $key = "Asit5jfdxyz";



    public function SetKey($change)
    {
        $this->key = $change;

    }

    public function GetKey(){

        $show = $this->key;

        return $show;

    }




}


?>