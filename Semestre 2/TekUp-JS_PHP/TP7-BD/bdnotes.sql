CREATE DATABASE bdnotes ;
USE bdnotes;

CREATE TABLE MATIERE
(codemat CHAR(3) PRIMARY KEY,
libelle VARCHAR(20), 
coef FLOAT); 

CREATE TABLE ETUDIANT
(numetu INTEGER AUTO_INCREMENT PRIMARY KEY, 
nom  VARCHAR(30), 
prenom  VARCHAR(30), 
datenaiss date, 
adresse VARCHAR(100));

CREATE TABLE EPREUVE 
(numepreuve INTEGER AUTO_INCREMENT PRIMARY KEY, 
datepreuve date not null, 
lieu VARCHAR(30), 
codemat CHAR(3)references MATIERE (codemat));

CREATE TABLE NOTATION 
(numetu INTEGER references ETUDIANT(numetu), 
numepreuve INTEGER references EPREUVE(numepreuve), 
note FLOAT,
constraint pk_note primary key (numetu,numepreuve)
);

INSERT INTO MATIERE VALUES ('STA', 'Statistique', 0.4),  
                        ('INF', 'Informatique', 0.4),  
                        ('ECO', 'Econométrie', 0.2);
						
insert into epreuve VALUES
(10011,'2018-12-10','Salle 1_1','STA'),
(10014,'2018-12-11','Amphi A'  ,'INF'),
(10012,'2019-01-07','Salle 2_2','INF'),
(10013,'2019-01-08','Salle 3_1','ECO');

insert into etudiant VALUES
( null, 'nom 1', 'prenom 1', '1999-01-28', 'Adresse 1'),
( null, 'nom 2', 'prenom 2', '2000-05-01', 'Adresse 2'),
( null, 'nom 3', 'prenom 3', '2001-03-02', 'Adresse 3'),
( null, 'nom 4', 'prenom 4', '2000-11-26', 'Adresse 4'),
( null, 'nom 5', 'prenom 5', '2000-09-17', 'Adresse 5');

insert into notation VALUES
(1,10011, 10.75),
(1,10013, 15.00 ),
(2,10014, 12.50),
(2,10012, 16);