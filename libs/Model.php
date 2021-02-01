<?php

namespace App\libs;

use App\libs\ConnexionDb;

class Model extends ConnexionDb
{
    protected $table;
    private $db;
    

    public function findAll(){
        $query = $this->requete('SELECT * FROM ' . $this->table);
        return $query->fetchAll();
    }

    public function findBy(array $criteres){
        $champs = [];
        $valeurs = [];

        foreach($criteres as $champ => $valeur){
            $champs[] = "$champ = ?";
            $valeurs[] = $valeur;
        }
        
        $liste_champs = implode(' AND ', $champs);
    
        return $this->requete(
            'SELECT * FROM ' . $this->table . 
            'WHERE ' . $liste_champs, 
            $valeurs
        )->fetchAll();
    }
    
    public function findOneByLogin(string $login)
    {
        return $this->requete(
            "SELECT * FROM {$this->table} 
            WHERE nom_user = ?", 
            [$login]
        )->fetch();
    }

    public function find(int $num){
        return $this->requete(
            "SELECT * FROM $this->table 
            WHERE num_article = $num"
        )->fetch();
    }

    public function findUser(int $num){
        return $this->requete(
            "SELECT * FROM $this->table 
            WHERE id_user = $num"
        )->fetch();
    }

    public function create(){
        $champs = [];
        $inter = [];
        $valeurs = [];

        foreach($this as $champ => $valeur){
            if($valeur !== null && $champ != 'db' && $champ != 'table'){
                $champs[] = $champ;
                $inter[] = "?";
                $valeurs[] = $valeur; 
            }
        }

        //On transforme le tableau champs en une chaine de caractères
        $liste_champs = implode(', ', $champs);
        $liste_inter = implode(', ', $inter);

        return $this->requete(
            'INSERT INTO ' . $this->table . ' (' . $liste_champs . ') 
            VALUES(' . $liste_inter . ')', 
            $valeurs
        );
    }

    public function update(){
        $champs = [];
        $valeurs = [];

        foreach($this as $champ => $valeur){
            if($valeur !== null && $champ != 'db' && $champ != 'table'){
                $champs[] = "$champ = ?";
                $valeurs[] = $valeur; 
            }
            
        }
        $valeurs[] = $this->num_article;
        $liste_champs = implode(', ', $champs);
        
        return $this->requete(
            'UPDATE ' . $this->table . 
            ' SET ' . $liste_champs . 
            'WHERE num_article = ?', 
            $valeurs
        );
    }

    public function updateUser(){
        $champs = [];
        $valeurs = [];

        foreach($this as $champ => $valeur){
            if($valeur !== null && $champ != 'db' && $champ != 'table'){
                $champs[] = "$champ = ?";
                $valeurs[] = $valeur; 
            }
        }

        $valeurs[] = $this->id_user;
        $liste_champs = implode(', ', $champs);
        
        return $this->requete(
            'UPDATE ' . $this->table . 
            ' SET ' . $liste_champs . 
            'WHERE id_user = ?', $valeurs
        );
    }

    public function delete($id){
        return $this->requete(
            "DELETE FROM $this->table 
            WHERE num_article = ?", 
            [$id]
        );
    }
    

    public function requete(string $sql, array $attributs = null){
        //On récupère l'instance de Db
        $this->db = ConnexionDb::getInstance();

        if($attributs !== null){
            //requête préparée
            $query = $this->db->prepare($sql);
            $query->execute($attributs);

            return $query;
        }
        else{
            //requête simple
            return $this->db->query($sql);
        }
    }


    public function hydrate($donnees){
        foreach($donnees as $key => $value){
            $setter = 'set' . ucfirst($key);
            //vérifier si dans notre objet on a une methode qui s'appelle setter
            if(method_exists($this, $setter)){ 
                $this->$setter($value);
            }
        }
        return $this;
    }

    public function protectData($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
        
    }
}