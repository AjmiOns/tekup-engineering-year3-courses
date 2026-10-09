<html> 
<body> 
<?php 
if(isset ($_GET["nbetu"])){
	$nbetu = $_GET["nbetu"]; 
	if(is_numeric($nbetu)){ 
		echo "<form action='afficheNotes_b.php' method='get'>"; 
		for($i=0; $i<$nbetu ; $i++){ 
			echo "<p>Etudiant ".($i+1)." : nom <input type='text' name='etu".$i."'> ";
			echo " note <input type='text' name='note".$i."'></p>"; 
		} 
		echo "<input type='hidden' name='nbetu' value='" . $nbetu. "'>"; 
		echo "<input type='submit' value='ok'/>"; 
		echo "</form>"; 
	}else 
		echo  "Erreur ! Vous devez indiquer un chiffre";
}else{ 
	echo  "Erreur ! Vous devez indiquer le nombre d'étudiants."; } 
?> 
</body> 
</html> 