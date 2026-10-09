<?php
//Question 1:
$server= "100.100.100.10"; 
$db="GESTION_FILM";
$user="HarryPotter";
$pwd="Alohomora"; 
$cnx=new PDO("mysql:host=$server; dbname=$db",$user, $pwd ); 
    //Ou bien
    $cnx=new PDO("mysql:host=100.100.100.10; dbname=GESTION_FILM","HarryPotter", "Alohomora" );

//Question 2:

//NumRes Nom_Film NumPlace NumSalle DateRes NumClient EtatRes
$nomF=$_POST['NomFilm'];
$numS=$_POST['NumSalle'];
$numP=$_POST['NumPlace'];
$numC=$_SESSION['numClient'];
$etatR="non confirmée ";
$sql="insert into Reservation values(null, $nomF, $numP, $numS, now(), $numC,$etatR )";
//ou bien
    //$sql="insert into Reservation(Nom_Film, NumPlace, NumSalle, DateRes ,NumClient, EtatRes) values($nomF, $numP, $numS, now(), $numC,$etatR )"
$cnx->exec($sql); //en supposant que NumRes est AUTO INCREMENT


//Question 3:
function listeReservation($numClient, $dateD, $dateF){
    $sql="select Nom_Film, NumSalle from Reservation
         where numClient=$numClient
         and EtatRes='confirmée'
         and dateRes>$dateD and dateRes<$dateF"; 
    
    $reservations=$cnx->query($sql);
    echo "Mes réservations entre $dateD et $dateF sont :";
    echo "<ol>"; 

    while($res=$reservations->fetch())
        echo "<li> $res['Nom_Film'], à la salle $res['NumSalle']</li>"; 
    
    echo "</ol>";
}

//Question 4:
function annulerReservation($num_res){
    $sql="update reservation set etatRes='annulée' where NumRes=$num_res ";
    $cnx->exec($sql);    
}

//Question 5:
function mostWatched($dateD, $dateF){
    $sql="select nom_Film, count(*) from Reservation
    where dateRes>$dateD and dateRes<$dateF
    and etatRes='confirmée'
    Group By (nom_Film)
    Having count(*)>100";

    return $cnx->query($sql); 

}
?>