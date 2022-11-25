<?php
namespace App\controllers;

use App\entities\Answer;
use Lib\Controller\AbstractController;
use \App\entities\QuizzQuestion;
use \App\entities\Questionnaire;

class QuizzController extends AbstractController{



    public function displayQuizz()
    {
       //définition question 1 & réponses

        $question1 = new QuizzQuestion(1,"What's your favorite pet ?" );

        $cat = new Answer('Cat', 'a', $question1);
        $dog = new Answer('Dog', 'b',$question1);
        $raven = new Answer('Raven', 'c',$question1);
        $elephant = new Answer('Elephant', 'd',$question1);
        $listAnswers1 = array();
        array_push( $listAnswers1, $cat,$dog,$raven,$elephant);

        $question1->createAnswerList($listAnswers1);


        //question 2
        $question2 = new QuizzQuestion(2,"What's your favorite color ?");

        $red = new Answer('Red', 'a', $question2);
        $yellow = new Answer('Yellow', 'b', $question2);
        $purple = new Answer('Purple', 'c', $question2);
        $black = new Answer('Black', 'd', $question2);

        $question3 = new QuizzQuestion(3,"Where would you picture your perfect home ?");
        $listAnswers2 = array();
        array_push( $listAnswers2, $red, $black,$yellow, $purple  );

        $question2->createAnswerList($listAnswers2);




        $listQuestions = array();
        array_push($listQuestions, $question1, $question2, $question3);

        $questionnaire = new Questionnaire($listQuestions);
        $titreQuestion = $questionnaire->displayQuestions();
        // je passe un tableau d'objets Questions à ma vue
        return $this->renderView('templates/quizz.php',
            ['title' => 'Questionnaire',
            'questions' => $titreQuestion]);
    }
}


