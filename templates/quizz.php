
<section>
    <form id="plant-quizz" method="post" action="take-quizz.php">
        <div class="question-container" class="container" >
            <?php if (isset($data['questions']))
                foreach ($data['questions'] as $oneQuestion){

                    //on crée une condition pour commencer par n'afficher que la première question
                    if($oneQuestion == $data['questions'][0] ){
                        echo('<div class="container">');
                        echo('<div class="card shadow-sm" style="width: 30rem;"  >');
                        echo('<div class="card-body">');
                        echo('<h5 class="card-title">' . $oneQuestion->getQuestion() . '</h5>');
                        foreach ($oneQuestion->createAnswerList() as $answer){
                            echo( '<input class="form-check-input" type="radio" name=' . $oneQuestion->getQuestionNumber() . '   value=$number />
<label class="form-check-label" for="inlineCheckbox2">' . $answer . '</label>' );
                        }

                        echo('</div>');
                        echo('</div>');
                        echo('</div>');
                    }
                    else{
                        echo('<div class="invisible-question" class="container">');
                        echo('<div class="card shadow-sm" style="width: 30rem;"  >');
                        echo('<div class="card-body">');
                        echo('<h5 class="card-title">' . $oneQuestion->getQuestion() . '</h5>');
                        foreach ($oneQuestion->createAnswerList() as $answer){
                            echo( '<input class="form-check-input" type="radio" name=' . $oneQuestion->getQuestionNumber() . '   value=$number />
<label class="form-check-label" for="inlineCheckbox2">' . $answer . '</label>' );
                        }

                        echo('</div>');
                        echo('</div>');
                        echo('</div>');
                    }
                }
            ?>
        </div>
    </form>
</section>