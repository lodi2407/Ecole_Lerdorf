<?php

namespace App\controllers;

use App\libs\Controller;
use App\models\ArticlesModel;
use App\models\CantineModel;
use App\models\NewsletterModel;

class PagesController extends Controller
{
    public function index()
    {
        $articlesModel = new ArticlesModel;
        $articles = $articlesModel->articlesAccueil();

        $titre = "Ecole Lerdorf";
        $subHeading = "Site officiel";
        $image = "../pictures/home/ecolechateau1.jpg";

        if($_POST) {
            
            $formNews = new NewsletterModel;

            $name = $formNews->protectData($_POST['nom']);
            $firstName = $formNews->protectData($_POST['prenom']);
            $mail = $formNews->protectData($_POST['email']);

            $formNews->setNom($name)
                     ->setPrenom($firstName)
                     ->setEmail($mail);

            $formNews->create($name, $firstName, $mail);
        }

        $this->render(
            'main/index', 
            [
                'articles'      => $articles, 
                'titre'         => $titre,
                'subHeading'    => $subHeading,
                'image'         => $image
            ], 
            'home'
        );
    }

    public function article($num)
    {
            $articleModel = new ArticlesModel;
            $article = $articleModel->find($num);

            $this->render(
                'article',
                [
                    'article'   => $article,
                ], 
                'home'
            );
    }

    public function articles()
    {
        $articlesModel = new ArticlesModel;

        $articles = $articlesModel->articlesActualites();

        $titre = "Articles";
        $image = "../pictures/articles/articles.jpg";

        $this->render(
            'pages/articles', 
            [
                'articles'  => $articles,
                'titre'     => $titre,
                'image'     => $image
            ], 
            'home'
        );
    }

    public function periscolaire()
    {

        $titre = "Périscolaire";
        $image = "../pictures/perisco/perisco.jpg";

        $this->render(
            'pages/periscolaire', 
            [
                'titre'     => $titre,
                'image'     => $image
            ], 
            'home'
        );
    }

    public function cantine()
    {
        $cantineModel = new CantineModel;
        $tarifCantine = $cantineModel->findAll();

        $titre = "Cantine scolaire";
        $image = "../pictures/cantine/cantine.webp";

        $this->render(
            'pages/cantine', 
            [
                'tarifCantine'  => $tarifCantine,
                'titre'         => $titre,
                'image'         => $image
            ], 
                'home'
            );
    }

    public function tap()
    {

        $titre = "Temps d'activités périscolaires";
        $image = "../pictures/tap/tap.webp";

        $this->render(
            'pages/tap', 
            [
                'titre'     => $titre,
                'image'     => $image
            ], 
            'home'
        );
    }

    public function classes() {

        $titre = "Les classes";
        $image = "../pictures/classes/classe.jpg";

        $this->render(
            'pages/classes', 
            [
                'titre'     => $titre,
                'image'     => $image
            ], 
            'home'
        );
    }

    public function reglementInterieur() {
        $titre = "Le règlement intérieur";
        $image = "../pictures/reglementInterieur/reglementInterieur.jpg";

        $this->render(
            'pages/reglementInterieur', 
            [
                'titre'     => $titre,
                'image'     => $image
            ], 
            'home'
        );
    }

    public function infosPratiques()
    {

        $titre = "Informations pratiques";
        $image = "../pictures/infosPratiques/infos.webp";

        $this->render(
            'pages/infosPratiques', 
            [
                'titre'     => $titre,
                'image'     => $image
            ], 
            'home'
        );
    }
}