<?php

namespace App\models;

use App\libs\Model;

class ArticlesModel extends Model
{
    protected $num_article;
    protected $titre_article;
    protected $date_article;
    protected $contenu_article;
    protected $auteur_article;
    protected $theme_article;
    protected $code_themeArticles;
    protected $resume_article;
    protected $lienImage_article;

    public function __construct()
    {
        $this->table = 'articles';
    }

    public function articlesAccueil(){
        $query = $this->requete(
            'SELECT *, SUBSTRING(contenu_article, 1, 50) AS contenu_article 
            FROM ' .$this->table . ' 
            ORDER BY date_article DESC LIMIT 4'
        );
        return $query->fetchAll();
    }

    public function articlesActualites() {
        $query = $this->requete(
            'SELECT *, SUBSTRING(contenu_article, 1, 290) AS contenu_article 
            FROM ' . $this->table
        );
        return $query->fetchAll();
    }

    public function createArticle($auteur, $titre, $date, $contenu, $theme, $image){
        return $this->requete(
            'INSERT INTO ' . $this->table . ' (auteur_article, titre_article, date_article, contenu_article, code_themeArticles, lienImage_article) 
            VALUES(?, ?, ?, ?, ?, ?)',
            [$auteur, $titre, $date, $contenu, $theme, $image]
        );
    }

    //-------------------------- Getters & setters --------------------------

    /**
     * Get the value of id
     */ 
    public function getNum_article()
    {
        return $this->num_article;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setNum_article($num_article)
    {
        $this->num_article = $num_article;

        return $this;
    }

    /**
     * Get the value of titre
     */ 
    public function getTitre_article()
    {
        return $this->titre_article;
    }

    /**
     * Set the value of titre
     *
     * @return  self
     */ 
    public function setTitre_article($titre_article)
    {
        $this->titre_article = $titre_article;

        return $this;
    }

    /**
     * Get the value of date
     */ 
    public function getDate_article()
    {
        return $this->date_article;
    }

    /**
     * Set the value of date
     *
     * @return  self
     */ 
    public function setDate_article($date_article)
    {
        $this->date_article = $date_article;

        return $this;
    }

    /**
     * Get the value of contenu
     */ 
    public function getContenu_article()
    {
        return $this->contenu_article;
    }

    /**
     * Set the value of contenu
     *
     * @return  self
     */ 
    public function setContenu_article($contenu_article)
    {
        $this->contenu_article = $contenu_article;

        return $this;
    }

    /**
     * Get the value of auteur
     */ 
    public function getAuteur_article()
    {
        return $this->auteur_article;
    }

    /**
     * Set the value of auteur
     *
     * @return  self
     */ 
    public function setAuteur_article($auteur_article)
    {
        $this->auteur_article = $auteur_article;

        return $this;
    }

    /**
     * Get the value of theme
     */ 
    public function getTheme_article()
    {
        return $this->theme_article;
    }

    /**
     * Set the value of theme
     *
     * @return  self
     */ 
    public function setTheme_article($theme_article)
    {
        $this->theme_article = $theme_article;

        return $this;
    }

    /**
     * Get the value of resume
     */ 
    public function getResume_article()
    {
        return $this->resume_article;
    }

    /**
     * Set the value of resume
     *
     * @return  self
     */ 
    public function setResume_article($resume_article)
    {
        $this->resume_article = $resume_article;

        return $this;
    }

    /**
     * Get the value of code_themeArticles
     */ 
    public function getCode_themeArticles()
    {
        return $this->code_themeArticles;
    }

    /**
     * Set the value of code_themeArticles
     *
     * @return  self
     */ 
    public function setCode_themeArticles($code_themeArticles)
    {
        $this->code_themeArticles = $code_themeArticles;

        return $this;
    }

    /**
     * Get the value of lienImage_article
     */ 
    public function getLienImage_article()
    {
        return $this->lienImage_article;
    }

    /**
     * Set the value of lienImage_article
     *
     * @return  self
     */ 
    public function setLienImage_article($lienImage_article)
    {
        $this->lienImage_article = $lienImage_article;

        return $this;
    }
}