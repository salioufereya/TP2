<?php

$nbPartant=intval(readline("Nombre de cheveaux partants : \n"));
$nbJoue=intval(readline("Nombre de cheveux joués \n"));
$numb1=1;
$numb2=1;
for($i=1;$i<= $nbPartant;$i++)
{
    $numb1=$numb1 * ($i + $nbPartant - $nbJoue);
    $numb2 = $numb2 * $i;

}
echo "Dans l'ordre une chance sur "+ $numb1 +" de gagner";
 