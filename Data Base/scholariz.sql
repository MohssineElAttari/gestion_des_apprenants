

-- /*----------------------------------- Create DATABASE ----------------------- */

CREATE DATABASE SCHOLARIZ

-- /* ----------------------------------- Create Tables ------------------------ */

-- -- Table Admin

-- CREATE TABLE `admin` (
--   `ID_a` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
--   `ID_p` int(11) DEFAULT NULL
-- );


-- -- Table personne

-- CREATE TABLE `personne` (
--   `ID_per` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT ,
--   `name` varchar(254) DEFAULT NULL,
--   `prenom` varchar(254) DEFAULT NULL,
--   `date_n` datetime DEFAULT NULL,
--   `genre` varchar(254) DEFAULT NULL,
--   `email` varchar(254) DEFAULT NULL,
--   `pass` varchar(254) DEFAULT NULL,
--   `ID_rolle` int(11) DEFAULT NULL
-- );

-- -- Table Student

-- CREATE TABLE `etudiant` (
--   `ID_e` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
--   `CIN` int(11) DEFAULT NULL,
--   `CNE` int(11) DEFAULT NULL,
--   `ID_p` int(11) DEFAULT NULL
-- );

-- -- Table prof

-- CREATE TABLE `professeur` (
--   `ID_p` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
--   `date_emb` datetime DEFAULT NULL
-- );

-- -- Table Groupe


-- CREATE TABLE `groupe` (
--   `ID_g` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
--   `labelle` varchar(245) DEFAULT NULL,
--   `ID_p` int(11) DEFAULT NULL,
--   `ID_pg` int(11) DEFAULT NULL
-- );

-- -- Table role

-- CREATE TABLE `role` (
--   `ID_rol` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
--   `status` varchar(254) DEFAULT NULL,
--   `ID_pr` int(11) DEFAULT NULL
-- );

-- /*------------------- END CREATING TABLES ------------------*/

-- ------------------ ADD FOREIGN KEYS TO ALL TABLES -----------------------------

-- ALTER TABLE `admin`
-- ADD CONSTRAINT `ID_pers` FOREIGN KEY (`ID_p`) REFERENCES `personne` (`ID_per`);


-- ALTER TABLE `etudiant`
-- ADD CONSTRAINT `ID_p` FOREIGN KEY (`ID_p`) REFERENCES `personne` (`ID_per`);


-- ALTER TABLE `groupe`
-- ADD CONSTRAINT `ID_personne` FOREIGN KEY (`ID_p`) REFERENCES `personne` (`ID_per`);

-- ALTER TABLE `personne`
-- ADD CONSTRAINT `ID_rolle` FOREIGN KEY (`ID_rolle`) REFERENCES `role` (`ID_rol`);


-- ALTER TABLE `professeur`
-- ADD CONSTRAINT `ID_Prsonne` FOREIGN KEY (`ID_p`) REFERENCES `personne` (`ID_per`);


-- ALTER TABLE `role`
-- ADD CONSTRAINT `ID_prs` FOREIGN KEY (`ID_pr`) REFERENCES `personne` (`ID_per`);

------------------------------------------------------

CREATE TABLE compte(
	ID int PRIMARY KEY AUTO_INCREMENT,
    role int NOT NULL,
  	email varchar(254),
    passwd varchar(245),
    status varchar(245)
)

CREATE TABLE groupe(
    ID_groupe int AUTO_INCREMENT PRIMARY KEY NOT NULL,
    groupe_name varchar(245)
);

CREATE TABLE etudiant(
    ID_etudiant int AUTO_INCREMENT PRIMARY KEY NOT NULL,
    nom varchar(245),
    prenom varchar(245),
    date_naissance date,
    CNE int,
    CIN int,
    genre varchar(245)
);

--------- ALTERS//FOREIGN KEYS ---------------------

ALTER TABLE groupe
ADD COLUMN professeur varchar(245);
ALTER TABLE etudiant 
ADD COLUMN ID_grp int

ALTER TABLE etudiant
ADD CONSTRAINT ID_grp
FOREIGN KEY (ID_grp) REFERENCES groupe(ID_groupe)

ALTER TABLE etudiant
ADD ID_compte int;

ALTER TABLE etudiant
ADD CONSTRAINT ID_compte
FOREIGN KEY (ID_compte) REFERENCES compte(ID)

--------------------- INSERT DATA ------------------------------


INSERT INTO groupe(groupe_name, professeur) VALUES ("ADA LOVE", "FATIMA ZEHRA");
INSERT INTO groupe(groupe_name, professeur) VALUES ("ALAN TURIN", "YOUNESS");
INSERT INTO groupe(groupe_name, professeur) VALUES ("MARGARITA", "AYOUB");

INSERT INTO compte(role, email, passwd, Status) VALUES (1, "testing@gmail.com" ,"12345T", "ADMIN");

INSERT INTO compte(role, email, passwd, Status) VALUES (2, "stud@gmail.com" ,"12345TSTUDENT", "ETUDIANT");

INSERT INTO etudiant(nom, prenom, genre, date_naissance, CNE , CIN, ID_grp, ID_compte) VALUES ("ALI", "HASAN", "male", 990310 , "1547512", "658111",1, 2);

INSERT INTO etudiant(nom, prenom, genre, date_naissance, CNE , CIN, ID_grp, ID_compte) VALUES ("MOHAMMED", "SOBHI", "male", 980612 , "112512", "658301",2, 2);

INSERT INTO etudiant(nom, prenom, genre, date_naissance, CNE , CIN, ID_grp, ID_compte) VALUES ("SABAH", "MORABIT", "female", 9813212 , "112500", "608301",2, 2);

INSERT INTO etudiant(nom, prenom, genre, date_naissance, CNE , CIN, ID_grp, ID_compte) VALUES ("MEHDI", "ROUHI", "male", 1113212 , "1122830", "608355",3, 2);

----------------  SELECTS  ---------------------

SELECT * from groupe;

SELECT compte.Status,email,passwd FROM compte

SELECT e.CIN, e.CNE
FROM etudiant e, groupe g
WHERE e.ID_grp = g.ID_groupe AND g.ID_groupe = 2

SELECT e.CIN, e.CNE, g.groupe_name
FROM etudiant e, groupe g
WHERE e.ID_grp = g.ID_groupe AND g.ID_groupe = 2

SELECT e.CIN AS "CODE", e.CNE AS "CODE NATIO", g.groupe_name AS "GROUPNAME"
FROM etudiant e, groupe g
WHERE e.ID_grp = g.ID_groupe AND g.ID_groupe = 2

SELECT nom, prenom,genre, groupe.groupe_name 
FROM etudiant
INNER JOIN groupe
ON etudiant.ID_grp = groupe.ID_groupe AND groupe.professeur = "YOUNESS";


