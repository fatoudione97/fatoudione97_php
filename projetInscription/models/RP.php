<?php
namespace App\Model;
class RP extends User{
    //Attributs d'instance
    private string $adresse;

    //Methodes
    public function __construct(){
        //On appelle le constructeur qui permet d'instancier 
        $this->role="ROLE_RP";
    }
    //setters ou mutateurs
//setters de adresse
public function setAdresse(string $adresse):void{
    $this->adresse=$adresse;
}
//les getters permettent d'obtenir la valeur d'un att privée ou proteted
//getter adresse
public function getAdresse():string{
    return $this->adresse;
}

}