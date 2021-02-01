<?php

namespace App\libs;

abstract class Controller
{
    public function render(string $fichier, array $donnees = [], string $template = 'home')
    {
        extract($donnees);

        ob_start();
        require_once('../views/main/header.php');
        $header = ob_get_clean();

        ob_start();
        require_once ROOT . '/views/' . $fichier . '.php';
        $content = ob_get_clean();

        ob_start();
        require_once('../views/main/footer.php');
        $footer = ob_get_clean();

        require_once ROOT . '/views/' . $template . '.php';

    }
}