<?php

namespace App\libs;

use App\controllers\PagesController;

class Router
{
    public function start()
    {
        session_start();

        $uri = $_SERVER['REQUEST_URI'];

       if(!empty($uri) && $uri != '/' && $uri[-1] === "/"){
            // On enlève le /
            $uri = substr($uri, 0, -1);

            // On envoie un code de redirection permanente
            http_response_code(301);

            // On redirige vers l'URL sans /
            header('Location: ' . $uri);
            
        }

        //on aura p=controleur/methode/paramètres
        $params = [];

        if(isset($_GET['p'])){
            $params = explode('/', $_GET['p']);
        }

        if($params[0] != ''){
            
            $controller = '\\App\\controllers\\'.ucfirst(array_shift($params)).'Controller';
            $controller = new $controller();
        
            //2e paramètre
            $action = (isset($params[0])) ? array_shift($params) : 'index';

            //autres paramètres
            if(method_exists($controller, $action)){
                (isset($params[0])) ? call_user_func_array([$controller, $action], $params) : $controller->$action();
            }
            else{
                http_response_code(404);
                echo "La page recherchée n'existe pas";
            }
        }
        
        else{
            //Pas de paramètres, on instancie le controller par défaut
            $controller = new PagesController;
            $controller->index();
        }

    }

    public function initRoute($routeName, $urlPath, $controller, $action) {

        $routes = array("name" => $routeName, "path" => $urlPath, "controlleur" => $controller, "action" => $action);

    }
}