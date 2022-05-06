<?php 
namespace App\Model;
class Professeur extends User{
    //attributs instances
        private  int $nci;
        private string $email;

        private Grade $grade;
    //Methodes
    
        //conctructeur : creer des objets
        public function __construct(){

        }
       
       
        //metiers

        /**
         * Get the value of nci
         */ 
        public function getNci()
        {
                return $this->nci;
        }

        /**
         * Set the value of nci
         *
         * @return  self
         */ 
        public function setNci($nci)
        {
                $this->nci = $nci;

                return $this;
        }

        /**
         * Get the value of email
         */ 
        public function getEmail()
        {
                return $this->email;
        }

        /**
         * Set the value of email
         *
         * @return  self
         */ 
        public function setEmail($email)
        {
                $this->email = $email;

                return $this;
        }

        /**
         * Get the value of grade
         */ 
        public function getGrade()
        {
                return $this->grade;
        }

        /**
         * Set the value of grade
         *
         * @return  self
         */ 
        public function setGrade($grade)
        {
                $this->grade = $grade;

                return $this;
        }
}