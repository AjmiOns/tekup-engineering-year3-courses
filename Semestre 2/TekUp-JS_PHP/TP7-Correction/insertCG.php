<html>
<head>
	<meta charset="utf-8"> 
	<title>Enregistrer une carte grise</title>
</head>
<body>
	<form action= "<?php echo $_SERVER['PHP_SELF'];?>"  method="post" >

	<legend>Enregistrement d'une carte grise</legend>
	Propriétaire: 
	<select name="proprietaire">
		
	<?php
	require "connect.inc.php";
	$req="select * from proprietaire";
	$res=$cnx->query($req);
	
	while ($row=$res->fetch())
		echo "<option value='".$row['id_pers']."' >".$row['nom']." ".$row['prenom']." </option>";
	
	?>
	</select><br><br>
	Voiture: 
	<select name="voiture">
	<?php
	$req="select * from voiture";
	$res=$cnx->query($req);
	
	while ($row=$res->fetch())
		echo "<option value='".$row['immat']."' >".$row['immat']." </option>";
	
	?>
	</select><br><br>
	Date de la carte grise AAAA-MM-JJ: 
	<input type="text" name="datecarte"> <br>
	
	<input type="reset" value=" Effacer "> <br>
	<input type="submit" value="ENREGISTRER" name="enreg"><br><br>
	
	</form>
	
<?php
	if(isset($_POST['enreg']))
	{
		$pers= $_POST['proprietaire'];
		$immat= $_POST['voiture'];
		$datecarte = $_POST['datecarte'];
		
		$req="insert into cartegrise values(:pers, :voit, :d)"; 
		$reqprep=$cnx->prepare($req);
		$reqprep->bindParam(':pers', $pers );
		$reqprep->bindParam(':voit', $immat);
		$reqprep->bindParam(':d',$datecarte );
		
		$r=$reqprep->execute();
		if(!$r)
			echo "Erreur d'enregistrement!!";
		else echo "Ajouté avec succès"; 		
	}
?>
</body>
</html>