<?php

$num=$_POST['nombre'];

function calcFactorial($num)
{
    if ($num <= 1) {
        return 1;
    } else {
        return ($num * calcFactorial($num-1));
    }
}

echo "le factoriel est: ".calcFactorial($num);