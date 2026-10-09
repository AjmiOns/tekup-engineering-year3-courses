<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
		<style>
		table, td, th {
			border: 1px solid;
		}

		table {
			border-collapse: collapse;
		}
		</style>
    </head>
    <body>
        <form method="post" enctype="multipart/form-data">
            
        Nom: <input type="text" name="nom"> <br><br>
        Prénom: <input type="text" name="prenom"><br><br>
        Age: <input type="number" name="age"><br><br>
		
        Sexe: Homme <input type="radio" name="rad" value="H">
              Femme <input type="radio" name="rad" value="F"><br><br>
			  
        Ville:<select name="ville"> 
			<option> Tunis</option>
			<option> Bizerte</option>
			<option> Ariana</option>
        </select><br><br>
		
        Competence: 
			<input type="checkbox" name="comp[]" value="PHP5">PHP5 
            <input type="checkbox" name="comp[]" value="Symfony">Symfony
            <input type="checkbox" name="comp[]" value="HTML5">HTML5
            <input type="checkbox" name="comp[]" value="CSS3"> CSS3<br><br>
        Photo: 
			<input type="file" name="photo" > <br><br><br><br>
			<input type="submit" name="enregistrer" value="Enregistrer">
			<input type="submit" value="afficher" name="bt"> 
		</form>
<?php
	require 'personne.php';
	require 'connexion.php';
	
	$p=new Personne();
	//Si on a cliqué sur enregistrer, 
	if(isset($_POST["enregistrer"])){
		//on récupère les donnes du formulaire et on les ajoute dans la base
		$comp=""; 
		foreach($_POST['comp'] as $c)
			$comp=$c." ".$comp;
		
		$photo=$_FILES['photo']['name'];
		move_uploaded_file($_FILES['photo']['tmp_name'],"images/".$photo);
		$p=new Personne($_POST['nom'], $_POST['prenom'],$_POST['age'], 
				$_POST['rad'], $_POST['ville'], $comp, $photo );
		
		$p->insertion($cnx);
	}
?>
    <table>
		<tr><th>ID</th><th>NOM</th><th>PRENOM</th><th>AGE</th>
			<th>SEXE</th><th>VILLE</th><th>COMPETENCE</th><th>PHOTO</th>
			<th>Modifier</th><th>Supprimer</th>
		</tr>
<?php
	$res=$p->selection($cnx);
	$idsup=0;
	while($row=$res->fetch()){
		echo "<tr><td>".$row['id']."</td>".
				"<td>".$row['nom']."</td>".
				"<td>".$row['prenom']."</td>".
				"<td>".$row['age']."</td>".
				"<td>".$row['sexe']."</td>".
				"<td>".$row['ville']."</td>".
				"<td>".$row['competences']."</td>".
				"<td> <img src='images/".$row['photo']."' width='100' height='100'> </td>".
				"<td><a href='modifier.php?id=".$row['id']."'>Modifier</a></td>".
				"<td><a href='index.php?idsup=".$row['id']."'>Supprimer</a>";
				
				if (isset($_GET['idsup'] )&& $_GET['idsup']==$row['id']){
					$idsup=$_GET['idsup'];
					echo "<form method='post' action=''>
							<input type='submit' name='suppr' value='Supprimer' >
							<input type='submit' name='annuler' value='Annuler' >
							</form>";
				}
				echo "</td></tr>";
	}


if (isset($_POST['suppr'])) {
	$p->suppression($cnx,$idsup);
	header("index.php"); 
}
if (isset($_POST['annuler'])) {
	header("index.php"); 
}

?>   
	</table>       
    </body>
</html>
