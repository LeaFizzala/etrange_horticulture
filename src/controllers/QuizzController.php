<?php
namespace App\controllers;

use Lib\Controller\AbstractController;

class QuizzController extends AbstractController{

    public function displayQuizz()
    {

        return $this->renderView('templates/quizz.php', ['title' => 'Accueil']);
    }
}


