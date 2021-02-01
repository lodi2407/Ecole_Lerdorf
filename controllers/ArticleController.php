<?php

namespace App\controllers;

use App\libs\Controller;
use App\models\ArticlesModel;
use App\models\ThemeArticlesModel;

class ArticleController extends Controller
{
    public function index($num)
    {
            $articleModel = new ArticlesModel;
            $article = $articleModel->find($num);

            $titre = $article['titre_article'];
            $image = "/pictures/articles/" . $article['lienImage_article'];
            
            $this->render(
                'article/article', 
                [
                    'article'   => $article,
                    'titre'     => $titre,
                    'image'     => $image
                ], 
                'home'
            );
        
    }

    public function ajouter()
    {

        $titre = 'Ajouter un article';
        $image = '../pictures/articles/newarticle.jpg';
        
        if (!empty($_POST) && isset($_SESSION['user']) && $_SESSION['user']['nom_user'] !== 'invite') {

            $auteur = $_SESSION['user']['nom_user'];
            $titre = strip_tags($_POST['titre']);
            $date = $_POST['date'];
            $contenu = strip_tags($_POST['contenu']);
            $theme = $_POST['theme'];
            $image = $_FILES['image']['name'];

            $imageDir = "../public/pictures/articles";
            $tmpName = $_FILES['image']['tmp_name'];
            $name = basename($_FILES['image']['name']);

            move_uploaded_file($tmpName, "$imageDir/$name");


            $formulaire = new ArticlesModel;
            $formulaire->setAuteur_article($auteur)
                       ->setTitre_article($titre)
                       ->setDate_article($date)
                       ->setContenu_article($contenu)
                       ->setTheme_article($theme)
                       ->setLienImage_article($image);
                       
            $formulaire->createArticle($auteur, $titre, $date, $contenu, $theme, $image);

            header('Location: /pages/index');
            exit;
        } 

        $this->render(
            'article/ajouter', 
            [
                'titre'     => $titre,
                'image'     => $image
            ], 
            'home');      
    }

    public function modifier($num)
    {
        $articleModel = new ArticlesModel;
        $article = $articleModel->find($num);
        $themeArticles = new ThemeArticlesModel;
        $themeArticle = $themeArticles->findAll();

        $titre = 'Modifier un article';
        $image = "/pictures/articles/modif/modif.jpg";

        if (!empty($_POST) && isset($_SESSION['user']) && $_SESSION['user']['nom_user'] !== 'invite') {
            
            $id = $article['num_article'];
            $titre = strip_tags($_POST['titre']);
            $date = $_POST['date'];
            $contenu = strip_tags($_POST['contenu']);
            $theme = $_POST['theme'];
            $image = $_FILES['image']['name'];

            $imageDir = "../public/pictures/articles";
            $tmpName = $_FILES['image']['tmp_name'];
            $name = basename($_FILES['image']['name']);

            move_uploaded_file($tmpName, "$imageDir/$name");

            $formulaire = new ArticlesModel;

            $articleArray = $formulaire->find($id);
            $article = $formulaire->hydrate($articleArray);

            $article->setTitre_article($titre)
                     ->setDate_article($date)
                     ->setContenu_article($contenu)
                     ->setCode_themeArticles($theme)
                     ->setLienImage_article($image);

            $article->update();

            header('Location: /pages/articles');
            exit;
        }

        $this->render(
            'article/modifier', 
            [
                'titre'         => $titre,
                'image'         => $image,
                'article'       => $article, 
                'themeArticle'  => $themeArticle
                
            ], 
            'home'
        );

        
    }

    public function supprimer($num)
    {
        if($_SESSION['user']['nom_user'] == 'invite') {
            header('Location: /pages');
        }

        if($_SESSION['user']['nom_user'] !== 'invite') {
           $articleModel = new ArticlesModel;
            $articleModel->delete($num);
            header('Location: /pages/articles');
            exit; 
        }
    }
    
}