<?php

namespace App\controllers;

use App\libs\Controller;

class ConnexionController extends Controller
{
    public function index()
    {
        $titre = 'Connexion';
        $image = '../pictures/connexion/cadena.jpg';

        $this->render(
            'admin/connexion', 
            [
                'titre'     => $titre,
                'image'     => $image
            ], 
            'home'
        );
    }
}