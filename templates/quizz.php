
<section>
<form id="plant-quizz" method="post" action="take-quizz.php">
    <div class="form-group">
        <?php if (isset($data['questions']))
            foreach ($data['questions'] as $oneQuestion){
                echo('<div class="container">');
                echo($oneQuestion->getQuestion());
                foreach ($oneQuestion->createAnswerList() as $answer){
                    echo( '<input class="form-check-input" type="radio" name="question-5-answers" value=$number />
<label class="form-check-label" for="inlineCheckbox2">' . $answer . '</label>' );
                }
                echo('<input type="submit" value=' . $oneQuestion->getButton() . '></input>');
                echo('</div>');
            }
             ?>
    </div>
</form>
</section>