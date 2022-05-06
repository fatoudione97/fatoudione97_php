<?php
namespace App\Model;
class Module{
    private string $libelle;


    //les attributs navigationnels
    //one to many avec cours
    private array $cours=[];


    //constructeur
    public function __construct(){}

    

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
}