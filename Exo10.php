<?php
$somDue=0;
$reste=0;
$nBillet10E=0;
$nBillet5E=0;
$nombreDeProduit=intval(readline("Entrer le nombre de produit: "));

for($i=1;$i<=$nombreDeProduit;$i++)
{

    $montant=intval(readline("Entrer le montant du produit :"));
    $somDue=$somDue+$montant;

}

echo "Vous devez la somme de :"+ $somDue+ "Euros ";
$montantVerse=intval(readline("Montantversé  : \n"));

$reste=$somDue - $montantVerse;
echo $reste;
while ($reste >=10)
{
    $nBillet10E=$nBillet10E+1;
    $reste=$reste-10;
}

if($reste >=5)
{
    $nBillet5E=1;
    $reste=$reste-5;
}
echo " La monnaie !!!!!!!!!!!! \n";
echo "Billet de 10 Euros :"+$nBillet10E+ "\n";
echo "Billet de 5 Euros :"+$nBillet5E +"\n";
echo "Pieces restant  :"+$reste +"\n";
