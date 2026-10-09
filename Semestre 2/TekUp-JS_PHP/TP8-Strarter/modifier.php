<?php
require 'personne.php';
require 'connexion.php';

$p=new Personne();

//on recupere l'id qui a éte passé dans le get a partir de index.php


//on appelle la methode selection_id de la classe Personne qui permet de remplir 
//le reste des champs de l'instance $p avec les valeurs recuperées de la base

?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <form method="post" enctype="multipart/form-data">
    <!--dans value on met les valeurs recuperées de la base pour les afficher dans le formulaire de modification !-->
        Nom: <input type="text" name="nom" value="<?php  ?>"><br>
        Prénom: <input type="text" name="prenom" value="<?php  ?>"> <br>
        Age:<input type="numbert" name="age"  value="<?php  ?>"><br>
        
    <!--dans le cas de bouton radio !-->
        Sexe:  	<input type="radio" name="rad" value="H" <?php ?> >Homme        
				<input type="radio" name="rad" value="F" <?php ?> >Femme <br>
       
        Ville:<select name="ville"> 
			<option <?php  ?> > Tunis</option>
			<option <?php  ?> > Bizerte</option>
			<option <?php  ?> > Ariana</option>
        </select><br><br>
        Competence: 
            <input type="checkbox" name="comp[]" value="PHP5"    <?php  ?> > PHP5
            <input type="checkbox" name="comp[]" value="Symfony" <?php  ?> >Symfony
            <input type="checkbox" name="comp[]" value="HTML5"   <?php  ?> >HTML5
            <input type="checkbox" name="comp[]" value="CSS3"    <?php  ?> >CSS3 <br><br>	
        Photo: 
			<img src="images/<?php  ?>"  width="200" height="200">
			
			<input type="file" name="photo"><br><br>
			<input type="submit" value="Modifier" name="modifier">
    </form>
    <?php
        //apres avoir rempli les champs à modifier et cliquer sur modif,  
        //on récupère les donnes du formulaire et on les modifie dans la base
	   
		//appeler la methode modification qui va modifier dans la base de donnes
			
		//redirection vers index.php apres avoir modifié
			
    ?>
 
</html>
