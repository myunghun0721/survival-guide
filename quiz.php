<?php 
	$page_title = "Quiz";

    function getScore(){
        global $conn;
        global $quiz_num;
        global $score;
        global $numQues;
        
        if($quiz_num == 1){
            $stmt = $conn->prepare("SELECT quiz1score FROM 240Login
            WHERE uname = ?;"); // Prepared Statement -> probably should select only the password?
            $stmt->bind_param("s", $_SESSION['name']);
        }elseif($quiz_num == 2){
            $stmt = $conn->prepare("SELECT quiz2score FROM 240Login
            WHERE uname = ?;"); // Prepared Statement -> probably should select only the password?
            $stmt->bind_param("s", $_SESSION['name']);
        }else{
            $stmt = $conn->prepare("SELECT quiz3score FROM 240Login
            WHERE uname = ?;"); // Prepared Statement -> probably should select only the password?
            $stmt->bind_param("s", $_SESSION['name']);
        }
        $stmt->execute();
        // This gives you the results.
        $results = $stmt->get_result();
            
        while($row = $results->fetch_assoc()){
            if($quiz_num == 1){
                $prevScore = $row['quiz1score'];
            }elseif($quiz_num == 2){
                $prevScore = $row['quiz2score'];
            }else{
                $prevScore = $row['quiz3score'];
            }
        }

        /*
            NEED TO GRAB THE USER'S SCORE FROM THE PAGE
        $val = round($score/$numQues * 100) . '%';
        if($quiz_num == 1){
            $stmt = $conn->prepare("UPDATE 240Login SET quiz1score = ? WHERE uname = ?;"); // Prepared Statement -> probably should select only the password?
            $stmt->bind_param("ss", $val, $_SESSION['name']);
            $stmt->execute();
        }elseif($quiz_num == 2){
            $stmt = $conn->prepare("UPDATE 240Login SET quiz2score = ? WHERE uname = ?;"); // Prepared Statement -> probably should select only the password?
            $stmt->bind_param("ss", $val, $_SESSION['name']);
            $stmt->execute();
        }else{
            $stmt = $conn->prepare("UPDATE 240Login SET quiz3score = ? WHERE uname = ?;"); // Prepared Statement -> probably should select only the password?
            $stmt->bind_param("ss", $val, $_SESSION['name']);
            $stmt->execute();
        }
        */
        if($prevScore == NULL){
            return "Quiz not attempted before.";
        }else{
            return "Previous score: " . $prevScore;
        }
    }

?>

<div class="quiz">
        <script src="<?php echo $path?>assets/js/quiz.js"></script>

        <div class="quizhead">
            <p id="question" class="question">Q?. Question Text</p>
        
            <p id="numquestions" class="numquestions"><strong>?/?</strong></p>
        </div>

        <div id="endQuiz" style="display:none;" class="">
            <p id="previousScore">

            <?php 
            if(empty($_SESSION['login']) || !$_SESSION['login']){
                //user not logged in
                echo "You are not logged in! To save your results log in to your account!";
            }else{
                echo getScore();
                ?>
                <script>
                    setScore();
                </script>
                <input type="hidden" id="score" value = ''>

                <input onclick="saveScore('<?php echo $path ?>')" class="questionSubmit" name="save" type="button" value="Save Score">

                <?php
            }
            ?>
            </p>
        </div>
                                
        <div id="quizoptioncontainer" class="quizoption-container">
            <div class="quizoption">
                <input type="radio" id="1" name="option" value="">
                <label id="q1" for="1"></label>
            </div>
        
            <div class="quizoption">
                <input type="radio" id="2" name="option" value="">
                <label id="q2" for="2"></label>
            </div>
            <div class="quizoption">
                <input type="radio" id="3" name="option" value="">
                <label id="q3" for="3"></label>
            </div>
            <div class="quizoption">
                <input type="radio" id="4" name="option" value="">
                <label id="q4" for="4"></label>
            </div>   
        </div>
        
        <div class="questionSubmitContainer">
            <input id="checkAnswer" onclick="checkAnswer()" class="questionSubmit" name="checkAnswer" type="button" value="Check Answer">
            <input id="next" onclick="next()" class="questionSubmit" name = "next" type="button" value="Next Question">
        </div>
    </div>

    <script>
        loadQuestion();
    </script>

