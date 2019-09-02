<?php
include 'Gorib.php';
class MyStatus implements Gorib {

    public function lowMoney()
    {
        echo "Amr Taka Kom <br>";
    }

    public function Homeless($takaChai)
    {
        echo $takaChai;
}
}