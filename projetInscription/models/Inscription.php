<?php
namespace App\Model;
use DateTime;
class Inscription{
    private DateTime $dateIns;
    private string $annee;

    //les attributs navigationnels
    //many to one avec classe
    public function classe():Classe{
        return new Classe;
    }
    //many to one avec Etudiant
   private Etudiant $etudiant;

    public function __construct(){}

    /**
     * Get the value of dateIns
     */ 
    public function getDateIns()
    {
        return $this->dateIns;
    }

    /**
     * Set the value of dateIns
     *
     * @return  self
     */ 
    public function setDateIns($dateIns)
    {
        $this->dateIns = $dateIns;

        return $this;
    }

    /**
     * Get the value of annee
     */ 
    public function getAnnee()
    {
        return $this->annee;
    }

    /**
     * Set the value of annee
     *
     * @return  self
     */ 
    public function setAnnee($annee)
    {
        $this->annee = $annee;

        return $this;
    }

    /**
     * Get the value of classe
     */ 
    public function getClasse()
    {
        return $this->classe;
    }

    /**
     * Set the value of classe
     *
     * @return  self
     */ 
    public function setClasse($classe)
    {
        $this->classe = $classe;

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