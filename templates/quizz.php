
<section>
    <form id="plant-quizz" method="post" action="?page=results">
        <div class="question-container" class="container" >
            <?php if (isset($data['questions']))
                foreach ($data['questions'] as $oneQuestion){

                    //on crée une condition pour commencer par n'afficher que la première question
                    if($oneQuestion == $data['questions'][0] ){
                        echo('<div  class="questions container">
                        <div class="card shadow-sm" style="width: 30rem;"  >
                        <div class="card-body">
                        <h5 class="card-title">' . $oneQuestion->getQuestion() . '</h5>');
                        foreach ($oneQuestion->createAnswerList() as $answer){
                            echo( '<input class="form-check-input" type="radio" name=' . $oneQuestion->getQuestionNumber() . '   value=$number />
<label class="form-check-label" for="inlineCheckbox2">' . $answer . '</label>' );
                        }

                        echo('</div>
                        </div>
                        </div>');
                    }
                    else{
                        echo('<div  class="invisible-question questions container">
                        <div class="card shadow-sm" style="width: 30rem;"  >
                        <div class="card-body">
                        <h5 class="card-title">' . $oneQuestion->getQuestion() . '</h5>');
                        foreach ($oneQuestion->createAnswerList() as $answer){
                            echo( '<input class="form-check-input" type="radio" name=' . $oneQuestion->getQuestionNumber() . ' value=' . $answer . ' />
<label class="form-check-label" for="inlineCheckbox2">' . $answer . '</label>' );
                        }

                        echo('</div>
                        </div>
                        </div>');
                    }
                }
            ?>
        </div>
        <input type="submit" name="submit" id="submit-btn">
    </form>
</section>