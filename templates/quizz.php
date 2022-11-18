<?php
use \App\entities\QuizzQuestion;

$question1 = new QuizzQuestion(1);

$reponses1 = ['a', 'b', 'c', 'd'];
$question1->createAnswerList($reponses1);
//var_dump($question1->getAnswerList());
