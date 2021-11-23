<?php


$nombre=intval(readline(" saisir un nombre "));
$stop=$nombre+10;
{
    echo ("Les dix nombres suivants sont :\n");
}
while($nombre < $stop)
{
    $nombre=$nombre+1;
    echo $nombre +"\n";
}