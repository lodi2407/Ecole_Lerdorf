<?php

namespace App\models;

use App\libs\Model;

class ThemeArticlesModel extends Model
{
    public function __construct()
    {
        $this->table = 'themearticles';
    }
}