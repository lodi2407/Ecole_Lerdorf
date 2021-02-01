<?php

namespace App\controllers;

use App\libs\Controller;
use App\models\UserModel;

class UserController extends Controller
{   
    public function connexionSession()
    {
        $login = $_POST['loginuser'];
        $mdp = $_POST['mdp'];

        if (!empty($_POST)) {

            if (!empty($login) && !empty($mdp)) {

                $userModel = new UserModel;
                $userArray = $userModel->findOneByLogin(strip_tags($login));

                if(!$userArray){
                    $_SESSION['erreur'] = 'L\'adresse e-mail et/ou le mot de passe est incorrect';
                    header('Location: ../connexion');
                    exit;
                }

                $user = $userModel->hydrate($userArray);

                 if(password_verify($mdp, $user->getMdp_user())){
                     $user->setSession();
                    header('Location:  ../connexion');
                    exit;
                }else{  
                    $_SESSION['erreur'] = 'L\'adresse e-mail et/ou le mot de passe est incorrect';
                    header('Location: ../connexion');
                    exit;
                }             
            }
        }
        header('Location: ../connexion');  
        exit;  
    }

    public function connexionInvite() {

        $login = 'invite';
        $userModel = new UserModel;
        $userArray = $userModel->findOneByLogin(strip_tags($login));
        $user = $userModel->hydrate($userArray);
        $user->setSession();
        header('Location:  ../connexion');
        exit;
        
    }

    public function logout(){
        unset($_SESSION['user']);
        header('Location: ../pages');
        exit;
    }
}