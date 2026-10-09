CREATE DATABASE basepersonnes ;
USE basepersonnes;

CREATE TABLE personne (
id INTEGER AUTO_INCREMENT PRIMARY KEY,
nom VARCHAR(30) NOT NULL,
prenom VARCHAR(30) ,
age INTEGER(3) , 
sexe VARCHAR(1), 
ville VARCHAR(50) ,
competences VARCHAR(250),
photo VARCHAR(250) );

