<?php

$plusGrand=0;
$i=0;
for($i==1;$i<=20;$i++)
{
    $nombre=intval(readline("saisir un nombre "+$i));
    if($nombre > $plusGrand)
    {
        $plusGrand=$nombre;
    }
}
echo "le plus grand est :"+$plusGrand;
