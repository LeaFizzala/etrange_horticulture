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
        $allQuestions = array();
        foreach ($this->allQuestions as $oneQuestion){
            // appeler une vue ici une sorte vue displayQuestion
            // et l'utiliser pour l'affichage en évitant le HTML dans les entités
            // peut-être faire appel à la fonction renderView et retourner une vue

             $allQuestions[] =  $oneQuestion;
        }
        return ($allQuestions);
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