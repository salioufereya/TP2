<?php
$pos=0;
$i=1;
$plusGrand=0;
do 
{
    $nombre=intval(readline("saisir un nombre:   "+$i));
    
    if($nombre > $plusGrand)
    {
        $plusGrand=$nombre;
        $pos=$i;
    }
    $i=$i+1;
}while($nombre !=0);
echo "le plus grand est :"+$plusGrand;
echo "il a été saisi en position :"+$pos;
