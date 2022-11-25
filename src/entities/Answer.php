<?php

namespace App\entities;

class Answer
{
    private string $answer;
    private string $personnalityType;
    private QuizzQuestion $quizzQuestion;

    /**
     * @param string $answer
     * @param string $personnalityType
     * @param QuizzQuestion $quizzQuestion
     */
    public function __construct(string $answer, string $personnalityType, QuizzQuestion $quizzQuestion)
    {
        $this->answer = $answer;
        $this->personnalityType = $personnalityType;
        $this->quizzQuestion = $quizzQuestion;
    }


    /**
     * @return string
     */
    public function getAnswer(): string
    {
        return $this->answer;
    }

    /**
     * @param string $answer
     */
    public function setAnswer(string $answer): void
    {
        $this->answer = $answer;
    }

    /**
     * @return string
     */
    public function getPersonnalityType(): string
    {
        return $this->personnalityType;
    }

    /**
     * @param string $personnalityType
     */
    public function setPersonnalityType(string $personnalityType): void
    {
        $this->personnalityType = $personnalityType;
    }

    /**
     * @return QuizzQuestion
     */
    public function getQuizzQuestion(): QuizzQuestion
    {
        return $this->quizzQuestion;
    }

    /**
     * @param QuizzQuestion $quizzQuestion
     */
    public function setQuizzQuestion(QuizzQuestion $quizzQuestion): void
    {
        $this->quizzQuestion = $quizzQuestion;
    }

    //getters et setters



}