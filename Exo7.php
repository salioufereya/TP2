<?php

$nombre=intval(readline("saisir un nombre :"));
$fac=1;
for($i=2;$i<=$nombre;$i++)
{
 $fac=$fac * $i;
}
echo "Le factorielle de :"+$nombre +"est :"+$fac;