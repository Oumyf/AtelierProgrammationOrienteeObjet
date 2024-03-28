<?php

//Création d'une classe parent vehicule 
class Vehicule {
    private $marque;
    private  $modele;
    private  $couleur;
    private $kilometrage;
    private $annee;
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
             //Ajout des getters et setters  pour accéder aux attributs privés
             public function getMarque()
             {
                 return $this->marque;
             }
         
         
             public function setMarque($marque)
             {
                 $this->marque = $marque;
             }
         
         
             public function getModele()
             {
                 return $this->modele;
             }
             public function setModele($modele)
             {
                 $this->modele = $modele;
             }
             public function getKilometrage()
             {
                 return $this->kilometrage;
             }
             public function setKilometrage($kilometrage)
             {
                 $this->kilometrage = $kilometrage;
             }
             public function getAnnee()
             {
                 return $this->annee;
             }
             public function setAnnee($annee)
             {
                 return $this->annee= $annee;
             } 
             public function getCouleur()
             {
                 return $this->couleur;
             }
             public function setCouleur($couleur)
             {
                 $this->couleur = $couleur;
             }
      

             function Afficher () {
                echo "La voiture est une ".  $this->marque ." ".$this->modele." de couleur ". $this->couleur. "<br>";
                echo "Elle a été fabriquée en ".$this->annee." et elle a fait ". $this->kilometrage." km. <br>";
            }

}

//création d'une interface reparable
interface IReparable
{
    public function reparer();
}
//Creation d'un sous-classe "voiture" qui hérite des attributs et méthodes de la  class "vehicule". Elle ajoute un nouvel attribut "?

class Voiture extends Vehicule implements IReparable {
    public $nb_place;
// Création  d'un constructeur pour la class voiture qui hérite des attributs et méthodes de la class vehicule mais ajoute un nouvel attribut.
public function  __construct($marque, $modele, $couleur, $kilometrage, $annee, $nb_place) {
    parent::__construct($marque,$modele,$couleur,$annee,$kilometrage);
    $this->nb_place= $nb_place;
} 
   //implementation  de la méthode reparer() de l'interface IReparable
   public function reparer()
   {
       echo "La voiture a été réparée. <br> ";
   }

public function getNombrePlaces()
{
    return $this->nb_place;
}
public function setNombrePlaces($nb_place)
{
    $this->nb_place = $nb_place;
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

$voiture1->setMarque("Ford");
$voiture1->setCouleur("Rose Bonbon");

class Moto extends Vehicule
{
    private $puissance;
    protected $carburant;
    private $boite_vitesse;


    public function  __construct($puissance, $carburant, $boite_vitesse)
    {
        $this->puissance = $puissance;
        $this->carburant = $carburant;
        $this->boite_vitesse = $boite_vitesse;
    }
    /*Méthodes                
    Affiche les informations sur une voiture*/
    function afficher()
    {
        echo "La moto possède une puissance de ", $this->puissance, "kW", " fonctionne avec comme carburant ", $this->carburant, " et  une boite à vitesse ", $this->boite_vitesse, "<br>";
    }
    //Utilisation des getters et Setter pour la récupération et la modification des variables privated et protected
    public function getPuissance()
    {
        return $this->puissance;
    }
    public function setPuissance($puissance)
    {
        $this->puissance = $puissance;
    }


    public function getCarburant()
    {
        return $this->carburant;
    }
    public function setCarburant($carburant)
    {
        $this->carburant = $carburant;
    }


    public function getBoite_vitesse()
    {
        return $this->boite_vitesse;
    }
    public function setBoite_vitesse($boite_vitesse)
    {
        return $this->boite_vitesse = $boite_vitesse;
    }
}




$moto_electrique = new Moto(350, "Electrique", "Automatique");
echo "<h2>Moteur électrique</h2><br>";
$moto_electrique->afficher();


