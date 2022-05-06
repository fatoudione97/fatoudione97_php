<?php
namespace App\Model;
//inset pour ajouter classe dans sql
//Classe: find(1)->select * from Classe where id=1; c'est une methode d'instance qui s'applique sur les objets

class Classe{
    //Attributs d'instance
    private string $niveau;
    private string $filiere;
    private string $libelle1;

    //les attributs navigationnels
    //one to many avec cours
    private array $cours=[];

      //one to many avec inscriptio
      private array $inscriptions=[];



    //Methodes
    public function __construct(){
        //On appelle le constructeur qui permet d'instancier 
    }

    /**
     * Get the value of cours
     */ 
    public function getCours()
    {
        return $this->cours;
    }

    /**
     * Set the value of cours
     *
     * @return  self
     */ 
    public function setCours($cours)
    {
        $this->cours = $cours;

        return $this;
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

    /**
     * Get the value of niveau
     */ 
    public function getNiveau()
    {
        return $this->niveau;
    }

    /**
     * Set the value of niveau
     *
     * @return  self
     */ 
    public function setNiveau($niveau)
    {
        $this->niveau = $niveau;

        return $this;
    }

    /**
     * Get the value of filiere
     */ 
    public function getFiliere()
    {
        return $this->filiere;
    }

    /**
     * Set the value of filiere
     *
     * @return  self
     */ 
    public function setFiliere($filiere)
    {
        $this->filiere = $filiere;

        return $this;
    }

    /**
     * Get the value of libelle
     */ 
    public function getLibelle1()
    {
        return $this->libelle1;
    }

    /**
     * Set the value of libelle
     *
     * @return  self
     */ 
    public function setLibelle1($libelle1)
    {
        $this->libelle1 = $libelle1;

        return $this;
    }
}