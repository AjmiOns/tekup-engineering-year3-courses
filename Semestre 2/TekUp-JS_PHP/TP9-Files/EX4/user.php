<?php
class User{
 
    // database connection
    private $cnx;
 
    // object properties
    private $id;
    private $username;
    private $password;
    
    // constructor with $db as database connection
    public function __construct($db){
        $this->cnx = $db;
    }
	
    // signup user
    function signup(){
		
	}
    // login user
    function login(){
		
	}
    
    // a function to check if username already exists
    function isAlreadyExist(){
		
	}
	
	public function getId(){ return $this->id;}
	public function setId($i){$this->id=$i;}
	
	public function getUsername(){ return $this->username;}
	public function setUsername($u){$this->username=$u;}
	
	public function getPassword(){ return $this->password;}
	public function setPassword($p){$this->password=$p;}
}