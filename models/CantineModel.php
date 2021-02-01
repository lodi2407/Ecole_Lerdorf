<?php

namespace App\models;

use App\libs\Model;

class CantineModel extends Model
{
    protected $codeTarif;
    protected $tarif;
    protected $libelle;

    public function __construct()
    {
        $this->table = 'tarifscantine';
    }

    
    //-------------------------- Getters & setters --------------------------

    /**
     * Get the value of codeTarif
     */ 
    public function getCodeTarif()
    {
        return $this->codeTarif;
    }

    /**
     * Set the value of codeTarif
     *
     * @return  self
     */ 
    public function setCodeTarif($codeTarif)
    {
        $this->codeTarif = $codeTarif;

        return $this;
    }

    /**
     * Get the value of tarif
     */ 
    public function getTarif()
    {
        return $this->tarif;
    }

    /**
     * Set the value of tarif
     *
     * @return  self
     */ 
    public function setTarif($tarif)
    {
        $this->tarif = $tarif;

        return $this;
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

    /**
     * Get the value of description
     */ 
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */ 
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }
}