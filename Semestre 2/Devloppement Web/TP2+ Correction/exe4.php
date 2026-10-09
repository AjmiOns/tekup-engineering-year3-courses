<?php
//Tableau des adresses mail
$tab=array("youssef@gmail.com","yosra@yahoo.fr","med@poste.fr","ali@poste.fr","salah@yahoo.fr","upes@yahoo.fr")
;
//Récupération des noms de domaine 
foreach($tab as $ind=>$val)
{
$dom=explode("@",$val);
$domaine[]=$dom[1];
}
echo"affichage des domaine <br>";
print_r($domaine);
//Compte du nombre d'occurences de chaque domaine
$stat=array_count_values ($domaine);
echo"affichage des nombres <br>";
print_r($stat);
//Nombre total d'adresses
$total=count($tab);
echo $total;
//Ou encore
//$total=array_sum($stat);
//Calcul des pourcentages 
foreach($stat as $fourn=>$nb)
{
$pourcent[$fourn]=$nb/$total*100;
echo "Fournisseur d'accès :$fourn = ",round($pourcent[$fourn],2)," % <br />";
}
?>