<?php

namespace App\entities;

class QuizzQuestion

{
    private int $questionNumber;
    private array $answerList;

    public function __construct(int $questionNum){
        $this->questionNumber = $questionNum;
        $this->answerList = array();
    }

    //fonction pour remplir l'objet Question
    public function createAnswerList(array $possibleAnswers) {
            $number = 'a';
        foreach ($possibleAnswers as $oneAnswer){
            $this->answerList[]= '<input class="form-check-input" type="radio" name="question-5-answers" value=$number />' . $oneAnswer;
            $number++;
        }
        foreach ($this->getAnswerList() as $oneAnswer){
            echo( $oneAnswer);
        }
    }

    /**
     * @return int
     */
    public function getQuestionUmber(): int
    {
        return $this->questionNumber;
    }

    /**
     * @param int $questionNumber
     */
    public function setQuestionNumber(int $questionNumber): void
    {
        $this->questionNumber = $questionNumber;
    }

    /**
     * @return array
     */
    public function getAnswerList(): array
    {
        return $this->answerList;
    }

    /**
     * @param array $answerList
     */
    public function setAnswerList(array $answerList): void
    {
        $this->answerList = $answerList;
    }


}