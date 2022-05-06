<?php 
namespace App\Model;
class Grade{
    //attributs instances
        private  string $libelle;

       // private Professeur $professeur=[];
    //Methodes
        //conctructeur : creer des objets
        public function __construct(){

        }
       
       

        /**
         * Get the value of libelle
         */ 
        public function getLibelle()
        {
                return $this->libelle;
        }

        /**
         * Set the value of libelle
         *
         * @return  self
         */ 
        public function setLibelle($libelle)
        {
                $this->libelle = $libelle;

                return $this;
        }
}