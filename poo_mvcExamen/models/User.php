<?php
namespace App\Models;
use App\Core\Model;
abstract class User extends Model{
    protected int $id;
    protected string $login;
    protected string $password;
    protected string $role;

    //Methodes 
    //Constructeur par defaut
    public function __construct(){
        Parent::$table="user";
        
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of login
     */ 
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set the value of login
     *
     * @return  self
     */ 
    public function setLogin($login)
    {
        $this->login = $login;

        return $this;
    }

    /**
     * Get the value of password
     */ 
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * @return  self
     */ 
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get the value of role
     */ 
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Set the value of role
     *
     * @return  self
     */ 
    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }
    public function insert(){
         
        //die(parent::$table);
        $sql="INSERT INTO  ".parent::$table."  (`login`, `password`,  `role`)
             VALUES ( ?, ?, ?);";
            
       return parent::database()->executeUpdate($sql,[
                                                $this->login,$this->password,self::$role]);
       }
       //pc-desktopmk/poo_mvc
}