drop DATABASE if exists sestyme_ecommerce;
CREATE DATABASE sestyme_ecommerce ;
Use sestyme_ecommerce ;

CREATE table Utilisateur
    (
    id int ,
    nom varchar(50), 
    email varchar(50)
    )

CREATE table Porudit
    (
    id int,
    nom varchar(50),
    )

CREATE table commande
    (
    id int,
    id_client int,
    date_commande date
    )