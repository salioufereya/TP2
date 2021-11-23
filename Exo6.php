<?php
$nombre=intval(readline("saisir un nombre :"));
$i=0;
$som=0;
for($i=0;$i<=$nombre;$i++)
{
    $som=$som+$i;
}
echo "la somme est:"+$som;