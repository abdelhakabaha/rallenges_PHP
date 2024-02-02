<?php
abstract class Produit
{
    private $id;
    private $nom;
    private $prix;
    private $stock;
    private $type;
    public function __construct($id, $nom, $prix, $stock){
    $this->$id->id;
    $this->$nom->nom;
    $this->$prix->prix;
    $this->$stock->stock;
    $this->$type->type;


    }
    public function getId(){
        return $this->id;
    }
    public function getNom(){
        return $this->nom;
    }
    public function getPrix(){
        return $this->prix;
    }
    public function getStock(){
        return $this->stock;
    }
}
?>