<?php
include 'Car.php';
class Audi extends Car{

    public function color(){
        echo "Royal Blue <br>";
    }

    public function seats(){
        echo "Business Class <br>";
    }
}

?>