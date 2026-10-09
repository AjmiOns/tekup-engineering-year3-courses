<?php
$host='localhost';
$db='basepersonnes';
$login='root';
$mdp='';
try{
    $cnx=new PDO("mysql:host=$host;dbname=$db",$login,$mdp);
}
catch (PDOException $e){
    echo"erreur".$e->getMessage();
}
?>