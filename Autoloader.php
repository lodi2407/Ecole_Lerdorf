<?php

namespace App;

class Autoloader
{
    //Récupération de la classe et appel de la méthode autoload
    static function register(){
        spl_autoload_register(
            [
                __CLASS__, 
                'autoload'
                ]
            );
    }

    //Chargement de la classe
    static function autoload($class){
         $class = str_replace(__NAMESPACE__ . '\\', '', $class);
         $class = str_replace('\\', '/', $class);
         $fichier = __DIR__ . '/' . $class . '.php';

        if(file_exists($fichier)){
            require_once $fichier;
        }
    }
}

