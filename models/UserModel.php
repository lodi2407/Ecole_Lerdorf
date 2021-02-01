<?php

namespace App\models;

use App\libs\Model;

class UserModel extends Model
{
    protected $id_user;
    protected $nom_user;
    protected $mdp_user;
    protected $email_user;
    protected $code_typeUtilisateurs;

    public function __construct()
    {
        $this->table = 'users';
    }

    public function setSession(){
        $_SESSION['user'] = [
            'id_user' => $this->id_user,
            'nom_user' => $this->nom_user,
            'email_user' => $this->email_user
        ];
    }

    
    // Getters & setters ---------------------------------------------

    /**
     * Get the value of id_user
     */ 
    public function getId_user()
    {
        return $this->id_user;
    }

    /**
     * Set the value of id_user
     *
     * @return  self
     */ 
    public function setId_user($id_user)
    {
        $this->id_user = $id_user;

        return $this;
    }

    /**
     * Get the value of nom_user
     */ 
    public function getNom_user()
    {
        return $this->nom_user;
    }

    /**
     * Set the value of nom_user
     *
     * @return  self
     */ 
    public function setNom_user($nom_user)
    {
        $this->nom_user = $nom_user;

        return $this;
    }

    /**
     * Get the value of mdp_user
     */ 
    public function getMdp_user()
    {
        return $this->mdp_user;
    }

    /**
     * Set the value of mdp_user
     *
     * @return  self
     */ 
    public function setMdp_user($mdp_user)
    {
        $this->mdp_user = $mdp_user;

        return $this;
    }

    /**
     * Get the value of email_user
     */ 
    public function getEmail_user()
    {
        return $this->email_user;
    }

    /**
     * Set the value of email_user
     *
     * @return  self
     */ 
    public function setEmail_user($email_user)
    {
        $this->email_user = $email_user;

        return $this;
    }

    /**
     * Get the value of code_typeUtilisateurs
     */ 
    public function getCode_typeUtilisateurs()
    {
        return $this->code_typeUtilisateurs;
    }

    /**
     * Set the value of code_typeUtilisateurs
     *
     * @return  self
     */ 
    public function setCode_typeUtilisateurs($code_typeUtilisateurs)
    {
        $this->code_typeUtilisateurs = $code_typeUtilisateurs;

        return $this;
    }

}