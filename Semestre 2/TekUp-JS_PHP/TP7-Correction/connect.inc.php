<?php
	
$servername = "localhost"; 
$username = "root"; 
$password =""; 
$dbname ="bdvoitures";

try
{
	$cnx = new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
}
catch(PDOException $e)
{ 
	"Connection failed:".$e->getMessage();
}

?>