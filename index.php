<?php

//création de la classe parent véhicule avec comme méthode demarrer()
class Vehicule
{
    public function demarrer()
    {
        echo "Le vehicule démarre.<br>";
    }
}

//Definition d'une Interface Reparable avec une méthode  reparer(). L'interface est obligatoire pour les classes qui l'implémentent.

interface IReparable
{
    public function reparer();
}



//Création de la classe voiture et extension de la classe Véhicule
class  Voiture extends Vehicule implements IReparable
{
    //changement du modificateur public en private
    private $marque;
    private $modele;
    private $kilometrage;
    private $annee;
    private $couleur;
    private $nbre_places;
    private $prix;
    private $statut;


    //Constructeur par défaut
    function __construct($m, $mo, $km, $np, $statut, $prix, $coul, $an)
    {
        $this->setMarque( $m );
        $this->setModele( $mo);
        $this->setKilometrage( $km);
        $this->setNombrePlaces( $np);
        $this->setStatut($statut);
        $this->setPrix($prix);
        $this->setAnnee($an);
    }

    //implementation  de la méthode reparer() de l'interface IReparable
    public function reparer()
    {
        echo "La voiture a été réparée. <br> ";
    }

    //Ajout des getters et setters  pour accéder aux attributs privés
    public function getMarque()
    {
        return $this->marque;
    }

    public function setMarque($ma)
    {
        $this->marque = $ma;
    }

    public function getModele()
    {
        return $this->modele;
    }
    public function setModele($mo)
    {
        $this->modele = $mo;
    }
    public function getKilometrage()
    {
        return $this->kilometrage;
    }
    public function setKilometrage($k)
    {
        $this->kilometrage = $k;
    }
    public function getAnnee()
    {
        return $this->annee;
    }
    public function setAnnee($a)
    {
        $this->annee = $a;
    }
    public function getNombrePlaces()
    {
        return $this->nbre_places;
    }
    public function setNombrePlaces($nb)
    {
        $this->nbre_places = $nb;
    }
    public function getStatut()
    {
        return $this->statut;
    }
    public function setStatut($st)
    {
        $this->statut = $st;
    }
    public function getPrix()
    {
        return $this->prix;
    }
    public function setPrix($pi)
    {
        $this->prix = $pi;
    }
    public function getCouleur()
    {
        return $this->couleur;
    }
    public function setCouleur($co)
    {
        $this->couleur = $co;
    }

    /*Méthodes                
    Affiche les informations sur une voiture*/
    function afficher()
    {
        echo "La voiture est une ", $this->marque, " ", $this->couleur, " ", $this->modele, " ", $this->nbre_places, " places", " ", $this->statut, " ", "acheté à ", $this->prix, "<br>";
        echo "Elle a été acheté en ", $this->annee, " et a parcouru ", $this->kilometrage, " km.<br><br>";
    }
    //définition d'une méthode klaxonner
    function klaxonner()
    {
        echo "bip bip bippppppp";
    }
}

//instanciation  d'objets de la class Voiture
$voiture1 = new Voiture("Renault", "Clio", 50000, 5, "Disponible", 4500000, "rouge vif", 2022);
$voiture2 = new Voiture("Peugeot", "306",  80000, 7, "réparation", 3400000, "bleu turquoise", 2023);

echo "<h2>Voiture 1 :</h2>";
$voiture1->demarrer();
$voiture1->afficher();
$voiture1->setMarque("Ford");





echo "<h2>Voiture 2 :</h2>";
//appel de la méthode klaxonner
$voiture2->klaxonner();
$voiture2->setCouleur("Rose Bonbon");
//appel de la méthode afficher pour afficher les détails
$voiture2->afficher();


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
