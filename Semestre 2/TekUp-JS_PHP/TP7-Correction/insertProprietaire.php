<?php
if(isset($_POST['btn'])){
	if(!empty($_POST['nom']) && !empty($_POST['adresse']) && !empty($_POST['ville']) && !empty($_POST['codepostal']))
	{
		//Récupération des valeurs saisies
		$nom=$_POST['nom'];
		$prenom=$_POST['prenom'];
		$adresse=$_POST['adresse'];
		$ville=$_POST['ville'];
		$codepostal=$_POST['codepostal'];

		include("connect.inc.php");
		
		//Requete SQL
		$req="insert into proprietaire values (NULL,:nom, :prenom, :adr, :ville, :codep )"; 
		//Préparer
		$reqprep=$cnx->prepare($req);
		//Lier les données
		//$tab=array(':nom'=>$non, ':prenom'=>$prenom,':adr'=>$adresse,':ville'=>$ville,':codep'=>$codepostal);
		//$reqprep->execute($tab);
		
		//oubien
		$reqprep->bindParam(':nom',$nom ); 
		$reqprep->bindParam(':prenom',$prenom ); 
		$reqprep->bindParam(':adr', $adresse); 
		$reqprep->bindParam(':ville',$ville ); 
		$reqprep->bindParam(':codep', $codepostal); 
		$res=$reqprep->execute();
		
		
?>

<html>
<head>
	<meta charset="utf-8"> 
	<title>Enregistrement d'une personne</title>
	
</head>
<body>
	<form action= "<?php echo $_SERVER['PHP_SELF'];?>" method="post">
		<legend><b>Coordonnées de la personne</legend>
		Nom : <input type="text" name="nom" > <br><br>
		Prénom :<input type="text" name="prenom"><br><br>
		Adresse : <input type="text" name="adresse"><br><br>
		Ville : <input type="text" name="ville"><br><br>
		Code postal :<input type="text" name="codepostal"><br><br>
		<input type="submit" value="Enregistrer" name="btn"><br><br>
		
	</form>
	
<?php

if($res)
			echo " Enregistré avec succès";
		else
			echo "Erreur d'insertion";
	}
	else echo "Veuillez remplir tous les champs! "; 
}	

?>
</body>
</html>