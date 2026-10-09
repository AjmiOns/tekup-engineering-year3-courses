<?php
require 'personne.php';
require 'connexion.php';

$p=new Personne();

//on recupere l'id qui a éte passé dans le get a partir de index.php
$id=$_GET['id']; 
//on appelle la methode selection_id de la classe Personne qui permet de remplir 
//le reste des champs de l'instance $p avec les valeurs recuperées de la base
$p->selection_id($cnx, $id);
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <form method="post" enctype="multipart/form-data" action="">
    <!--dans value on met les valeurs recuperées de la base pour les afficher dans le formulaire de modification !-->
        Nom: <input type="text" name="nom" value="<?php echo $p->getNom();   ?>"><br>
        Prénom: <input type="text" name="prenom" value="<?php echo$p->getPrenom();  ?>"> <br>
        Age:<input type="number" name="age"  value="<?php echo $p->getAge(); ?>"><br>
        
    <!--dans le cas de bouton radio !-->
        Sexe:  	<input type="radio" name="rad" value="H" <?php 
						if ($p->getSexe()=="H") echo "checked";
		?> >Homme        
				<input type="radio" name="rad" value="F" <?php
						if ($p->getSexe()=="F") echo "checked";
		?> >Femme <br>
       
        Ville:<select name="ville"> 
			<option <?php if($p->getVille()=="Tunis") echo "selected";  ?> >Tunis</option>
			<option <?php if($p->getVille()=="Bizerte") echo "selected";  ?> >Bizerte</option>
			<option <?php if($p->getVille()=="Ariana") echo "selected";  ?> >Ariana</option>
        </select><br><br>
        Competence: 
            <input type="checkbox" name="comp[]" value="PHP5"    <?php if(strpos($p->getCompetence(), "PHP5") >-1) echo "checked"; ?> >PHP5
            <input type="checkbox" name="comp[]" value="Symfony" <?php if(strpos($p->getCompetence(), "Symfony")>-1) echo "checked"; ?> >Symfony
            <input type="checkbox" name="comp[]" value="HTML5"   <?php if(strpos($p->getCompetence(), "HTML5")>-1) echo "checked"; ?> >HTML5
            <input type="checkbox" name="comp[]" value="CSS3"    <?php if(strpos($p->getCompetence(), "CSS3")>-1) echo "checked";  ?> >CSS3 <br><br>	
        Photo: 
			<img src="images/<?php echo $p->getPhoto(); ?>"  width="200" height="200">
			
			<input type="file" name="photo"><br><br>
			<input type="submit" value="Modifier" name="modifier">
    </form>
    <?php
        //apres avoir rempli les champs à modifier et cliquer sur modif,
		if (isset($_POST['modifier'])){
		//on récupère les donnes du formulaire et on les modifie dans la base
		$comp="";
		foreach($_POST['comp'] as $c)
			$comp=$c." ".$comp;
		
		$photo=$_FILES['photo']['name'];
		move_uploaded_file($_FILES['photo']['tmp_name'], 'images/'.$photo);
		
		$p=new Personne($_POST['nom'],$_POST['prenom'], $_POST['age'], $_POST['sexe'], $_POST['ville'],$comp, $photo );
	  
		//appeler la methode modification qui va modifier dans la base de donnes
		$p->modification($cnx, $id);
		//redirection vers index.php apres avoir modifié
		header("location:index.php");
		}	
    ?>
 
</html>
