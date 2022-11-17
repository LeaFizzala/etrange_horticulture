<?php
namespace App\controllers;

use Lib\Controller\AbstractController;

class MainController extends AbstractController
{
    public function home() {

        return $this->renderView('templates/home.php', ['title' => 'Accueil']);
    }


    public function register() {
        return $this->renderView('templates/register.php', ['title' => 'Register']);
    }
}