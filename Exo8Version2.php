<?php
$pos=0;
$plusGrand=0;
for($i==1;$i<=20;$i++)
{
    $nombre=intval(readline("saisir un nombre:   "+$i));
    if($nombre > $plusGrand)
    {
        $plusGrand=$nombre;
        $pos=$i;
    }
}
echo "le plus grand est :"+$plusGrand;
echo "il a été saisi en position :"+$pos;
