CREATE DATABASE bdvoitures ;
USE bdvoitures;

CREATE TABLE proprietaire (
id_pers INTEGER AUTO_INCREMENT PRIMARY KEY,
nom VARCHAR(30) NOT NULL,
prenom VARCHAR(30) ,
adresse VARCHAR(50) NOT NULL,
ville VARCHAR(40) NOT NULL,
codepostal INTEGER(5) NOT NULL
);

CREATE TABLE modele (
id_modele VARCHAR(10) PRIMARY KEY,
modele VARCHAR(30) NOT NULL,
carburant VARCHAR(10) NOT NULL
);

CREATE TABLE voiture (
immat VARCHAR(6) PRIMARY KEY,
id_modele VARCHAR(10) references modele(id_modele),
couleur VARCHAR(10) NOT NULL,
datevoiture DATE 
);

CREATE TABLE cartegrise (
id_pers INTEGER(8)references proprietaire(id_pers) ,
immat VARCHAR(6) references voiture(immat),
datecarte DATE ,
constraint pk_cg primary key (id_pers, immat)
);



INSERT INTO modele VALUES ('17C92853AZ','Citroen C5','diesel');
INSERT INTO modele VALUES ('178524ER45','Citroen Picasso','essence');
INSERT INTO modele VALUES ('7499RF5679','Renault Mégane Scénic','diesel');
INSERT INTO modele VALUES ('33356677PO','Peugeot 206','électrique');
INSERT INTO modele VALUES ('563339GH56','Citroen C3','essence');
INSERT INTO modele VALUES ('83321TY455','Renault Espace','diesel');


INSERT INTO voiture VALUES ('1TUN12',	'178524ER45',	'Noir'	,'2014-12-03');
INSERT INTO voiture VALUES ('2TUN33',	'17C92853AZ',	'Rouge'	,'2015-01-14');
INSERT INTO voiture VALUES ('3TUN33',	'33356677PO',   'Gris'	,'2009-01-14');


INSERT INTO proprietaire( nom, prenom, adresse, ville, codepostal) VALUES ('Med','Salah','adresse1','Nabeul',8000);
INSERT INTO proprietaire( nom, prenom, adresse, ville, codepostal) VALUES ('Ali','Salah','adresse2','Nabeul',8000);