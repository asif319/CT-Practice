<?php
include 'FullName.php';

class MyName extends FullName{
    public function PrintName($nam){
       $this->NamKi = $nam;

       echo $this->NamKi;
    }
}