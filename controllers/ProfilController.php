<?php

namespace App\controllers;

use App\libs\Controller;
use App\models\ProfilModel;

class ProfilController extends Controller
{ 
    public function index()
    {
        $titre = "Profil";
        $image = "../pictures/profil/pencils.jpg";

        $this->render(
            'admin/profil', 
            [
                'titre' => $titre,
                'image' => $image
            ],
             'home'
            );
    }

    public function update()
    {
        if($_SESSION['user']['nom_user'] == 'invite') {
            header('Location: /pages');
        }
        
        if(isset($_SESSION['user']) && $_SESSION['user']['nom_user'] !== 'invite' ){

            $id = $_SESSION['user']['id_user'];
            $login = strip_tags($_POST['login']);
            $mdp = strip_tags($_POST['mdp']);
            $confirmNewMdp = strip_tags($_POST['confirmNewMdp']);
            $email = strip_tags($_POST['email']);

            $profilModel = new ProfilModel;

            $userArray = $profilModel->findUser($id);
            $user = $profilModel->hydrate($userArray);

            $user->setNom_user($login)
                 ->setEmail_user($email);

            if(!empty($mdp) && $mdp == $confirmNewMdp) {
                $user->setMdp_user(password_hash($mdp, PASSWORD_DEFAULT));
            }
            
            $user->updateUser();

            header('Location: /profil');
            exit;

        }else{
            echo 'erreur pas de session';
        }
        
    }
}