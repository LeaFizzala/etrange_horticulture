<?php

namespace App\entities;

class Questionnaire
{
private array $allQuestions;

    /**
     * @param array $allQuestions
     */
    public function __construct(array $allQuestions)
    {
        $this->allQuestions = $allQuestions;
    }

    //fonction pour afficher les questions
    public function displayQuestions(){
        foreach ($this->allQuestions as $oneQuestion){
            echo('<div class="container">');
            echo($oneQuestion->getQuestion());
           $oneQuestion->createAnswerList();
            echo($oneQuestion->getButton());
           echo('</div>');
        }
    }

    /**
     * @return array
     */
    public function getAllQuestions(): array
    {
        return $this->allQuestions;
    }

    /**
     * @param array $allQuestions
     */
    public function setAllQuestions(array $allQuestions): void
    {
        $this->allQuestions = $allQuestions;
    }


}