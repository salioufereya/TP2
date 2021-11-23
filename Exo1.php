
<?php
$NB_MIN=1;
$NB_MAX=3;
$nombre=rand($NB_MIN,$NB_MAX);
do {
    $nombSaisie=intVal(readline("Saisir un nombre :"));
}while($nombSaisie != $nombre);
