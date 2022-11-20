<?php

namespace App\entities;

class QuizzQuestion

{
    private int $questionNumber;
    private string $question;
    private array $answerList;
    private string $button = '<input type="submit" value="Submit"></input>';

    public function __construct(int $questionNum, string $question, $answerList){
        $this->questionNumber = $questionNum;
        $this->question = $question;
        $this->answerList = $answerList;
    }

    //fonction pour remplir l'objet Question
    public function createAnswerList() {

        foreach ($this->getAnswerList() as $oneAnswer){
            echo( '<input class="form-check-input" type="radio" name="question-5-answers" value=$number />
<label class="form-check-label" for="inlineCheckbox2">' . $oneAnswer . '</label>' );

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

    /**
     * @return string
     */
    public function getButton(): string
    {
        return $this->button;
    }

    /**
     * @param string $button
     */
    public function setButton(string $button): void
    {
        $this->button = $button;
    }

    /**
     * @return string
     */
    public function getQuestion(): string
    {
        return $this->question;
    }

    /**
     * @param string $question
     */
    public function setQuestion(string $question): void
    {
        $this->question = $question;
    }



}