<?php
namespace App\controllers;

use Lib\Controller\AbstractController;
use \App\entities\QuizzQuestion;
use \App\entities\Questionnaire;

class QuizzController extends AbstractController{



    public function displayQuizz()
    {

        $question1 = new QuizzQuestion(1,"What's your favorite pet ?" ,['a', 'b', 'c', 'd']);
        $question2 = new QuizzQuestion(2,"What's your favorite color ?",['a', 'b', 'c', 'd']);
        $question3 = new QuizzQuestion(3,"Where would you picture your perfect home ?",['a', 'b', 'c', 'd']);
        $question4 = new QuizzQuestion(4,"Why ?",['a', 'b', 'c', 'd']);
        $question5 = new QuizzQuestion(5,"How ?",['a', 'b', 'c', 'd']);
        $question6 = new QuizzQuestion(6,"Favourite soup ?",['a', 'b', 'c', 'd']);

        $listQuestions = array();
        array_push($listQuestions, $question1, $question2, $question3, $question4, $question5);

        $questionnaire = new Questionnaire($listQuestions);
        $titreQuestion = $questionnaire->displayQuestions();
        // je passe un tableau d'objets Questions à ma vue
        return $this->renderView('templates/quizz.php',
            ['title' => 'Questionnaire',
            'questions' => $titreQuestion]);
    }
    public function  displayResults(){
        var_dump($_POST);
        // on lit bien la valeur des boutons cliqués mais pour le moment, pour établir les résultats il faudrait
        // que chaque bouton soit analysé
        // or il vaudrait mieux des classes de boutons du genre 'personnalité a', 'personnalité b'
        // il faudrait donc peut-être penser une classe réponse, qui possède elle-même ses caractéristiques
    }
}


