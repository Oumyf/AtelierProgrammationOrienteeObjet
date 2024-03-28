<?php
//Création d'une classe parent vehicule 
class Vehicule {
    public $marque;
    public  $modele;
    public  $couleur;
    public $kilometrage;
    public $annee;
    //Constructeur de la class vehicule qui va prendre en parametre les attributs du vehicule
    function __construct($marque, $modele, $couleur, $kilometrage, $annee) {
        $this->marque = $marque;
        $this->modele = $modele;
        $this->couleur = $couleur;
        $this->kilometrage = $kilometrage;
        $this->annee = $annee;
    }
    function demarrer(){
        echo "Le véhicule démarre.<br>";
    }
}

//Creation d'un sous-classe "voiture" qui hérite des attributs et méthodes de la  class "vehicule". Elle ajoute un nouvel attribut "?

class Voiture extends Vehicule {
    public $nb_place;
    // La méthode __call est une méthode magique PHP qui permet de gérer les appels à des méthodes qui ne sont pas définies dans notre classe
     
public function  __construct($marque, $modele, $couleur, $kilometrage, $annee, $nb_place) {
    parent::__construct($marque,$modele,$couleur,$kilometrage,$annee);
    $this->nb_place= $nb_place;
} 
     function Afficher () {
        echo "La voiture est une ".  $this->marque ." ".$this->modele." de couleur ". $this->couleur. "<br>";
        echo "Elle a été fabriquée en ".$this->annee." et elle a fait ". $this->kilometrage." km. $this->nb_place<br>";
    }

}
$voiture1 = new Voiture("Ford", "Mustang", "Rouge Vif", 2023, 100, 5);

//On appelle la méthode d'objet pour afficher les informations de la première voiture
$voiture1->Afficher();