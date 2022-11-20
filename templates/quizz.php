<?php
use \App\entities\QuizzQuestion;
use \App\entities\Questionnaire;
$question1 = new QuizzQuestion(1,"What's your favorite pet ?" ,['a', 'b', 'c', 'd']);
$question2 = new QuizzQuestion(2,"What's your favorite color ?",['a', 'b', 'c', 'd']);
$question3 = new QuizzQuestion(3,"Where would you picture your perfect home ?",['a', 'b', 'c', 'd']);
$question4 = new QuizzQuestion(4,"Why ?",['a', 'b', 'c', 'd']);
$question5 = new QuizzQuestion(5,"How ?",['a', 'b', 'c', 'd']);
$question6 = new QuizzQuestion(6,"Favourite soup ?",['a', 'b', 'c', 'd']);

$listQuestions = array();
array_push($listQuestions, $question1, $question2, $question3, $question4, $question5);

$questionnaire = new Questionnaire($listQuestions);

?>

<form id="plant-quizz" method="post" action="take-quizz.php">
    <div class="form-group">
    <?php
$questionnaire->displayQuestions();
?>
    </div>
</form>