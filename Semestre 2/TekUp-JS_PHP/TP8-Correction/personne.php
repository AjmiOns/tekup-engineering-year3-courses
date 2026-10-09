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
		$req="insert into personne values(null, :nom, :prenom, :age, :sexe, :ville, :comp, :photo)";
		$params=array(':nom'=>$this->nom,':prenom'=>$this->prenom,':age'=>$this->age,
					  ':sexe'=>$this->sexe,':ville'=>$this->ville, ':comp'=>$this->competence,
					  ':photo'=>$this->photo );
		$reqpre=$cnx->prepare($req);
		$reqpre->execute($params);
	}
	
	public function selection($cnx){
		$req=$cnx->prepare("select * from personne"); 
		$req->execute();
		return $req; 
	}
	
	public function modification ($cnx,$id){
		$req="update personne set nom=:nom, prenom=:prenom, age=:age, sexe=:sexe, ville=:ville, competences=:comp, photo=:photo where id=:id";
		$params=array(':nom'=>$this->nom,':prenom'=>$this->prenom,':age'=>$this->age,
					  ':sexe'=>$this->sexe,':ville'=>$this->ville, ':comp'=>$this->competence,
					  ':photo'=>$this->photo, ':id'=>$id );
		$reqpre=$cnx->prepare($req);
		$reqpre->execute($params);
	}
	
	public function suppression($cnx,$id){
		$req=$cnx->prepare("delete from personne where id=:id"); 
		$req->execute(array(':id'=>$id));
		
	}
	public function selection_id ($cnx,$id){
		$req=$cnx->prepare("select * from personne where id=:id"); 
		$req->execute(array(':id'=>$id));
		$row=$req->fetch(); 
		
		$this->nom=$row['nom'];                 
    	$this->prenom=$row['prenom'];           
    	$this->age=$row['age'];                
    	$this->sexe=$row['sexe'];     
    	$this->ville=$row['ville'];             
    	$this->competence=$row['competences'];    
    	$this->photo=$row['photo'];  
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
