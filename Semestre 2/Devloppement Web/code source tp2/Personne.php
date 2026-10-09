<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Personne
 *
 * @author a
 */
//mettre cette instruction ici pour s'assurer que  a chaque fois qu on utilise personne on appelle la connexion
//attention de ne pas oublier les cotes pour le nom de fichier
require 'connexion.php';
class Personne {
    
    //put your code here
    /* private $id;
    private $nom;
    private $prenom;
    private $age;
    private $sexe;
    private $ville;
    private $competences;
    private $photo;
     */
    public $id;
    public $nom;
   public $prenom;
   public $age;
    public $sexe;
   public $ville;
   public $competences;
    public $photo;
    function Personne($id,$nom,$prenom,$age,$sexe,$ville,$competences,$photo)
    {
        $this->id=$id;
        $this->nom=$nom;
        $this->prenom=$prenom;
        $this->age=$age;
        $this->sexe=$sexe;
        $this->ville=$ville;
        $this->competences=$competences;
        $this->photo=$photo;       
        
    }
    function affiche()
    {
        
        echo('nom est     '.$this->nom);
        echo'<br>';
        echo('le prénom est '.$this->prenom);
        echo'<br>';
        echo('l\'age est'.$this->age);
        echo'<br>';
        echo('le sexe est'.$this->sexe);
        echo'<br>';
        echo('la ville est'.$this->ville);
        echo'<br>';
        echo('les compétences sont '.$this->competences);
        echo'<br>';
        echo('le chemin de la photo est '.$this->photo);       
         
    }
    function insertion ($conn)
    {//preparation de la requete
        $st=$conn->prepare("insert into personne values(default,?,?,?,?,?,?,?)");
        //$var_dump permet de verifier si tout va bien, si oui elle affiche true sinon
        //executer la erquete     
        $r= $st->execute(array($this->nom,$this->prenom,$this->age,$this->sexe,$this->ville,$this->competences,$this->photo));
       //var_dump($r);   
          
      // $st->execute(array($this->nom,$this->prenom,$this->age,$this->sexe,$this->ville,$this->competences,$this->photo));
           
          //     vardump
        
    }
    
    function selection($conn)
    {
        $st=$conn->prepare("select * from personne");
        $st->execute();
        return $st;
        
        
    }
       function affectation($conn)
    {
        $st=$conn->prepare("select * from personne");
        $st->execute();
        return $st;
        
        
    }
        
    
}
