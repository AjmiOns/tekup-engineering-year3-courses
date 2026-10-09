<html> 
	
<body> 
<?php 
	// utilisation du champ caché pour connaitre le nombre d'étudiants. 
	$nbetu = $_GET["nbetu"]; 
	$notes=array();

	// remplissage d'un tableau associatif 
	for($i=0 ; $i<$nbetu ; $i++){ 
		if(!empty( $_GET["etu$i"]) ){ 
			if(!empty( $_GET["note$i"])  ){
				$nom = $_GET["etu$i"]; // variable temporaire 
				$note = $_GET["note$i"]; // variable temporaire 

				if(is_numeric($note) && $note >=0 && $note <=20){ 
					$notes[$nom] = $note; }
				else{ 
					echo("La note de l'étudiant ".($i+1)." est incorrecte. <br>"); } 
			}
			else{ 
				echo("La note de l'étudiant " . ($i+1) . " n'est pas renseignée. <br>"); } 
		}
		else{ 
			echo("Le nom de l'étudiant " . ($i+1) . " n'est pas renseigné. <br>"); }   
	} 

   // affichage des notes dans un tableau html 
  echo "<table border='1'>"; 
  echo "<tr><td>NOM</td><td>NOTE</td></tr>"; 
   foreach($notes as $nom => $note){ 
          echo "<tr><td>$nom</td><td>$note</td></tr>"; 
  } 
  echo "</table>"; 
?> 
</body> 
</html> 