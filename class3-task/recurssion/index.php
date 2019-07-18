<?php

function greet($n){
    if ($n <= 0) {

    }else{
        $a = 2;
        $b = 3;
        $c = 4;
        $d = 5;
        echo "1 + 2 +3 + 4 + 5 =" . ($n+$a+$b+$c+$d);
        $n--;
        greet($n);
    }
}

greet(1);

?>