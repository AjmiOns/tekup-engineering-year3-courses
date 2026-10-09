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
    //on récupère les donnes du formulaire et on les ajoute dans la base

?>

        
    <table>
		<tr><th>ID</th><th>NOM</th><th>PRENOM</th><th>AGE</th>
			<th>SEXE</th><th>VILLE</th><th>COMPETENCE</th><th>PHOTO</th>
			<th>Modifier</th><th>Supprimer</th>
		</tr>
<?php
	
?>		
    </table>    
          
    </body>
</html>
