<html> 
<body> 
<?php 
	// utilisation du champ caché pour connaitre le nombre d'étudiants. 
	$nbetu = $_GET["nbetu"]; 
	$notes=array();
	
	// remplissage d'un tableau  
	for($i=0 ; $i<$nbetu ; $i++){  
		if(!empty($_GET["note$i"]) ){
			$note = $_GET["note$i"]; // variable temporaire
			if(is_numeric($note) && $note >=0 && $note <=20){ 
				$notes[$i] = $note;	}
			else{ 
				echo "La note de l'étudiant ".($i+1)." est incorrecte. <br>"; } 
		}else{ 
			echo "La note de l'étudiant ".($i+1)." n'est pas renseignée. <br>"; } 
	} 
	 
	// affichage des notes dans un tableau html 
	echo "<table border='1'>"; 
	echo "<tr><th>Notes</th></tr>"; 
	foreach($notes as $note){ 
		echo "<tr><td>$note</td></tr>"; } 
	echo "</table>"; 
?> 
</body> 
</html> 