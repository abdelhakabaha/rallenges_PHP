<?php
class Commande{
    private $id_commande;
    private $id_client;
    private $date_commande;
    public function __construct($id_commande, $id_client, $date_commande){
        $this->id_commande = $id_commande;
        $this->id_client = $id_client;
        $this->date_commande = $date_commande;
    }
    public function getId_commande(){
        return $this->id_commande;
    }
    public function getId_client(){
        return $this->id_client;
    }
    public function getDate_commande(){
        return $this->date_commande;
    }
}
?>