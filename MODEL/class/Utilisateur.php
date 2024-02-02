<?php
class Utilisateur{
    private $id;
    private $nom;
    private $email;
    public function __construct($id,$nom,$email){
        $this->id = $id;
        $this->nom = $nom;
        $this->email = $email;
    }
    public function getId(){
        return $this->id;
    }
    public function getNom(){
        return $this->nom;
    }
    public function getEmail(){
        return $this->email;
    }
}
?>