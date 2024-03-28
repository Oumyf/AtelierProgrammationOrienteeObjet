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
        $this->annee = $annee;
        $this->kilometrage = $kilometrage;
    }
    //Création de la methode demarrer.
    function demarrer(){
        echo "Le véhicule démarre.<br>";
    }
}

//Creation d'un sous-classe "voiture" qui hérite des attributs et méthodes de la  class "vehicule". Elle ajoute un nouvel attribut "?

class Voiture extends Vehicule {
    public $nb_place;
// Création  d'un constructeur pour la class voiture qui hérite des attributs et méthodes de la class vehicule mais ajoute un nouvel attribut.
public function  __construct($marque, $modele, $couleur, $kilometrage, $annee, $nb_place) {
    parent::__construct($marque,$modele,$couleur,$annee,$kilometrage);
    $this->nb_place= $nb_place;
} 
//Ici  on affiche les differentes attribut de la voiture
     function Afficher () {
        echo "La voiture est une ".  $this->marque ." ".$this->modele." de couleur ". $this->couleur. "<br>";
        echo "Elle a été fabriquée en ".$this->annee." et elle a fait ". $this->kilometrage." km. $this->nb_place<br>";
    }

       //définition d'une méthode klaxonner
       function klaxonner()
       {
           echo "bip bip bippppppp";
       }

}
$voiture1 = new Voiture("Ford", "Mustang", "Rouge Vif", 2023, 100, 5);

//On appelle la méthode d'objet pour afficher les informations de la première voiture
$voiture1->Afficher();
$voiture1->demarrer();
//appel de la méthode klaxonner
$voiture1->klaxonner();