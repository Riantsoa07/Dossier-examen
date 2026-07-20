CREATE DATABASE projet_final;
USE projet_final;


CREATE TABLE membre(
    id_membre INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(100),
    numero_etu VARCHAR(20)
);


CREATE TABLE categorie(
    id_categorie INT AUTO_INCREMENT PRIMARY KEY,
    nom_categorie VARCHAR(100)
);


CREATE TABLE produit(
    id_produit INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(100),
    id_categorie INT,
    prix_reference DECIMAL(10,2)
);


CREATE TABLE produit_membre(
    id_produit_membre INT AUTO_INCREMENT PRIMARY KEY,
    id_produit INT,
    id_membre INT,
    prix_vente DECIMAL(10,2),
    quantite_dispo INT,
    date_dispo DATE
);


CREATE TABLE vente(
    id_vente INT AUTO_INCREMENT PRIMARY KEY,
    date DATE,
    heure TIME,
    id_produit_membre INT,
    quantite INT
);

INSERT INTO membre(id_membre, nom, numero_etu) VALUES
(1,'Rakoto','ETU001'),
(2,'Rabe','ETU002'),
(3,'Rasoa','ETU003'),
(4,'Kanto','ETU004'),
(5,'Hery','ETU005'),
(6,'Lova','ETU006'),
(7,'Tiana','ETU007'),
(8,'Fara','ETU008'),
(9,'Miora','ETU009'),
(10,'Nantenaina','ETU010');

INSERT INTO categorie(id_categorie, nom_categorie) VALUES
(1,'Plat'),
(2,'Boisson'),
(3,'Snack'),
(4,'Dessert');

INSERT INTO produit(id_produit, nom, id_categorie, prix_reference) VALUES
(1,'Pizza',1,12000),
(2,'Hamburger',1,10000),
(3,'Hot Dog',1,8000),
(4,'Coca-Cola',2,3000),
(5,'Jus orange',2,4000),
(6,'Eau minerale',2,1500),
(7,'Chips',3,2500),
(8,'Pop-corn',3,3000),
(9,'Biscuit',3,2000),
(10,'Bonbon',3,1000),
(11,'Gateau',4,5000),
(12,'Donut',4,3500),
(13,'Croissant',4,2500),
(14,'Glace',4,4000),
(15,'Yaourt',4,3000);

INSERT INTO produit_membre(id_produit_membre,id_produit,id_membre,prix_vente,quantite_dispo,date_dispo) VALUES
(1,1,1,12000,5,'2026-07-20'),
(2,2,2,9500,8,'2026-07-20'),
(3,3,3,8000,10,'2026-07-20'),
(4,4,4,3000,20,'2026-07-20'),
(5,5,5,4500,15,'2026-07-20');