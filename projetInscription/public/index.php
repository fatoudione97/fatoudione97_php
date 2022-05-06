<?php 

//use DateTime;
use App\Model\AC;
use App\Model\Grade;
use App\Model\Classe;
use App\Model\Etudiant;
use App\Model\Professeur;
use App\Model\DossierEtudiant;

require_once('../vendor/autoload.php');
//objet-> : demander l'interface de l'objet
//interface de l'objet : c'est l'ensemble des att et methodes publics de la classe
//importer un fichier en php (require ou include)


//creer des objets=> instanciation
$classe1= new Classe(); // fait appel a la fonction __construct()
//donner un  etat
$classe1->setLibelle1("L2 GLRS B");
//recuperer l'etat de l'objet
echo ("Libelle : ".$classe1->getLibelle1() ."\n");
// mm chose pour le reste

$etudiant1= new Etudiant();

$etudiant1->setNomComplet("oumy cisse");
$etudiant1->setLogin("ertf@hjhg");
$etudiant1->setPassword("ism123");
$etudiant1->setMatricule(12);

echo("Nom: ".$etudiant1->getNomComplet()."\n");
echo("Login: ".$etudiant1->getLogin()."\n");
echo("Password: ".$etudiant1->getPassword()."\n");
echo ("Matricule :".$etudiant1->getMatricule()."\n");



$professeur1 = new Professeur();

$professeur1->setNci(1549638596);
$professeur1->setEmail("fd@hotmail.com");

echo ("Nci :".$professeur1->getNci()."\n");
echo ("Email :".$professeur1->getEmail()."\n");


$grade1= new Grade();

$grade1->setLibelle("Maitre de conference");

echo ("NomGrade :".$grade1->getLibelle() ."\n");


$dossierEtu1 = new DossierEtudiant();

$dossierEtu1->setDateOuverture(new DateTime("2020/05/01"));

echo ("DateOuvertureDossier :".$dossierEtu1->getDateOuverture()->format('y/m/d')."\n");

$ac=new AC();

$ac->setEmail("fghdty@gmail.com");
$ac->setLogin("17");
$ac->setPassword("fd");

echo ("EmailAC : ".$ac->getEmail()."\n");
echo ("Login : ".$ac->getLogin()."\n");
echo ("MotDePasse : ".$ac->getPassword()."\n");