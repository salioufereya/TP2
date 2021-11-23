<?php
$NB_MIN=10;
$NB_MAX=20;
$nombre=rand($NB_MIN,$NB_MAX);
do {
    $nombSaisie=intVal(readline("Saisir un nombre compris entre 10 et 20 :"));
    if($nombSaisie=== $nombre){
        echo "bien fait";
    }
    elseif($nombSaisie > 20){
        echo "le nombre est Plus petit \n";
    }elseif ($nombSaisie < 20)
    {
        echo " Le nombre est plus grand \n";
    } 
}while($nombSaisie != $nombre);