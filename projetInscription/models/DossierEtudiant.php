<?php
namespace App\Model;
use DateTime;
class DossierEtudiant
{
    //attributs instances
    private DateTime $dateOuverture;
    // attribut de navigation : issue des relation
    public Etudiant $etudiant;
    //Methodes
    //conctructeur : creer des objets
    public function __construct()
    {
    }
     /**
     * Get the value of dateOuverture
     */ 
    public function getDateOuverture()
    {
        return $this->dateOuverture;
    }

    /**
     * Set the value of dateOuverture
     *
     * @return  self
     */ 
    public function setDateOuverture($dateOuverture)
    {
        $this->dateOuverture = $dateOuverture;

        return $this;
    }


    /**
     * Get the value of etudiant
     */
    public function getEtudiant()
    {
        return $this->etudiant;
    }

    /**
     * Set the value of etudiant
     *
     * @return  self
     */
    public function setEtudiant($etudiant)
    {
        $this->etudiant = $etudiant;

        return $this;
    }

   
}
