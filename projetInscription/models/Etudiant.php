<?php
namespace App\Model;
class Etudiant extends User{
        //Attributs d'instance
        private string $nomComplet;
        private string $matricule;

           //les attributs navigationnels
            //One to many avec classe
            public array $inscriptions=[];

        
    //Methodes
    public function __construct(){
        //On appelle le constructeur qui permet d'instancier 
    }

    //setters ou mutateurs
//setters de nomComplet
public function setNomComplet(string $nomComplet):void{
    $this->nomComplet=$nomComplet;
}
//setters de matricule
public function setMatricule(string $matricule):void{
    $this->matricule=$matricule;
}
//les getters permettent d'obtenir la valeur d'un att privée ou proteted
//getter nomComplet-
public function getNomComplet():string{
    return $this->nomComplet;
}
//getter matricule
public function getMatricule():string{
    return $this->matricule;
}


            /**
             * Get the value of inscriptions
             */ 
            public function getInscriptions()
            {
                        return $this->inscriptions;
            }

            /**
             * Set the value of inscriptions
             *
             * @return  self
             */ 
            public function setInscriptions($inscriptions)
            {
                        $this->inscriptions = $inscriptions;

                        return $this;
            }
}
        