<?php

$check = 2;

$name = "Asif";

if (empty($check)){
    echo "It's empty" . "<br>";
}else {
    echo "It's not empty". "<br>";
}

echo gettype($name) . "<br>";
echo gettype($check) . "<br>";

$values = array(23, "23", 23.5, "23.5", null, true, false);
foreach ($values as $value) {
    echo "is_int(";
    var_export($value);
    echo ") = ";
    var_dump(is_int($value));

}

var_dump(is_float(27.25));
var_dump(is_float('abc'));
var_dump(is_float(23));
var_dump(is_float(23.5));

function destroy_foo()
{
    global $foo;
    unset($foo);
}

$foo = 'bar';
destroy_foo();
echo $foo;
?>