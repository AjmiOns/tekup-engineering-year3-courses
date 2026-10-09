<?php
class Personne {
	private $idp;
	private $nom; 
	private $prenom; 
	private $age; 
	private $sexe;
	private $ville; 
	private $competence; 
	private $photo;
	
	public function __construct($nom="user",$prenom="",$age=0,$sexe="",$ville="",$competence="",$photo=""){
    	$this->nom=$nom;                 
    	$this->prenom=$prenom;          
    	$this->age=$age;                
    	$this->sexe=$sexe;              
    	$this->ville=$ville;             
    	$this->competence=$competence;   
    	$this->photo=$photo;             
            
	}
	
	public function insertion($cnx){
		
	}
	
	public function selection($cnx){
		
	}
	
	public function modification ($cnx,$id){
		
	}
	
	public function suppression($cnx,$id){
		
	}
	public function selection_id ($cnx,$id){
		
	}	
	public function affiche(){
		echo $this->nom.' , ';
		echo $this->prenom.' , ';
		echo $this->age.' , ';
		echo $this->sexe.' , ';
		echo $this->ville.' , ';
		echo $this->competence.' ';
		echo $this->photo;
	}
	
	public function setNom($n){
		$this->nom=$n;
	}
	public function getNom(){
		return $this->nom;
	}
	public function setPrenom($p){
		$this->prenom=$p;
	}
	public function getPrenom(){
		return $this->prenom;
	}
	public function setAge($a){
		$this->age=$a;
	}
	public function getAge(){
		return $this->age;
	}
	public function setSexe($s){
		$this->sexe=$s;
	}
	public function getSexe(){
		return $this->sexe;
	}
	
	public function setVille($v){
		$this->ville=$v;
	}
	public function getVille(){
		return $this->ville;
	}
	public function setCompetence($c){
		$this->competence=$c;
	}
	public function getCompetence(){
		return $this->competence;
	}
	public function setPhoto($p){
		$this->photo=$p;
	}
	public function getPhoto(){
		return $this->photo;
	}
}

?>
