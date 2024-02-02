drop DATABASE if exists sestyme_ecommerce;
CREATE DATABASE sestyme_ecommerce ;
Use sestyme_ecommerce ;

CREATE table Utilisateur
    (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(255),
    id INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(255) NOT NULL,
    email VARCHAR(255) UNIQUE NOT NULL,
    role ENUM('admin', 'utilisateur') DEFAULT 'utilisateur';
    )

insert into Utilisateur values
('abdelhak','abdelhak@gmail.com','admin'),
insert into Utilisateur values
('user','user@gmail.com','utilisateur');

CREATE table Porudit
    (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nom varchar(50),
    prix int NOT NULL,
    stock int NOT NULL,
    )
insert into produit values 
(
    ('phone'  , 123 , 12),
    ('pc'     , 145 , 6),
    ('serveur', 918 , 2);
)

CREATE table commande
    (
    id int,
    id_client int FOREIGN KEY ,
    date_commande date,
    )









  
