<?php
$a = 15;
$c = 10;
$d = 5;

if ($a > $c && $a > $d) {
echo "A";
} elseif ($c > $a && $c > $d) {
echo "C";
} elseif ($d > $a && $d > $c) {
echo "D";
} else {
echo "Not Match";
}
?>