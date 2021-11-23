<?php

$nbPartant=intval(readline("Nombre de cheveaux partants : \n"));
$nbJoue=intval(readline("Nombre de cheveux joués \n"));
$num=1;
for($i=2;$i<=$nbPartant;$i++)
{
    $num=$num * $i;
}
$deno=1;
for($i=2;$i<=($nbPartant-$nbJoue);$i++)
{
    $deno=$deno * $i;
}
$deno2=1;
for($i=2;$i<= $nbPartant;$i++)
{
    $deno2 =$deno2 * $i;
}
echo "Dans l'ordre une chance sur "+ ($num / $deno)+" de gagner";
echo " Dans le desordre une chance sur "+$num / ($deno * $deno2)+ "de gagner";