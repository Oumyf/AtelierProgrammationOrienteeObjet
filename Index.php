<?php
class Voiture {
    public $marque;
    public  $modele;
    public  $couleur;
    public $kilometrage;
    public $annee;

    public function Afficher () {
        echo "La voiture est une ".  $this->marque ." ".$this->modele." de couleur ". $this->couleur. "<br>";
        echo "Elle a été fabriquée en ".$this->annee." et elle a fait ". $this->kilometrage." km.<br>";
    }
}
$voiture1 = new Voiture();
$voiture1 -> marque= "Renault";
$voiture1 -> modele="Clio";
$voiture1 -> couleur="Bleu";
$voiture1 -> annee=2005;
$voiture1 -> kilometrage=98765;
//On appelle la méthode d'objet pour afficher les informations de la première voiture
$voiture1->Afficher();