<?php

$nombre=intval(readline("saisir un nombre: "));
for($i =1;$i < 10;$i++)
{
    $resultat=$nombre*$i;
    $operateur="X";
    $op="=";
    echo $nombre +$operateur +$op +$resultat;
}       