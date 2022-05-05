// Alex Rogoff
// Quiz Script
// Loads proper quiz questions

var score = 0;
var numQuestions = 0;
var currentQuestion = 1;

// Quiz questions
var quiz1 = [
    ["Where did Unix originate?", "IBM Watson Labs", "AT&T Bell Labs", "Xerox", "Intel", 2],
    ["What is the core of a Unix operating system called?", "Core", "Apple", "Kernel", "DOS", 3],
    ["Linux is what?", "A derivative of the Unix codebase","Free and open source software","An ecosystem of multiple operating systems called 'distros'","All of the above", 4],
    ["The shell provides ________", "A protective layer for the operating system", "A hardened coating on the install disc", "An interface that interprets user commands", "Central processing code", 3]
    ];
var quiz2 = [
    ["What is the command to change directories?", "ls", "chmod", "cd", "chown", 3],
    ["What is the command that lists the contents out of the Desktop Directory?", "ls Desktop", "cd Desktop", "chmod 755 Desktop", "mkdir Desktop", 1],
    ["What is the command that lists out ALL of the contents of Desktop in a list format?", "ls -a Desktop","ls Desktop","ls -l Desktop","ls -la Desktop", 4],
    ["What file permission gives everyone full access?", "755", "577", "777", "644", 3]
    ];

var quiz3 = [
    ["What does SSH stand for?", "Stupid Sinking Hole", "Secure Simple Help", "Secure Shell", "Send Ship", 3],
    ["Why is it a good idea to use an SFTP client?", "Directory Management", "GUI's", "Sending multiple files at once", "All of the above", 4],
    ["What does the -r option do for the ssh command (and many other commands)?", "Recursive / Scan within folders","Return data","Render result","Rotate text", 1],
    ["Is it a good idea to give everyone the 777 permission on system files?", "Yes", "No", "I don't know", "Who knows? I do it anyway", 2]
    ];

var quizData = [];
if(quizId == 1){
    quizData = quiz1;
    numQuestions = quiz1.length;
}else if(quizId == 2){
    quizData = quiz2;
    numQuestions = quiz2.length;
}else{
    quizData = quiz3;
    numQuestions = quiz3.length;
}

// Load the question into the appropriate html area
function loadQuestion(){
    document.getElementById('question').innerHTML = "Q" + currentQuestion + ". " + quizData[currentQuestion-1][0];
    document.getElementById('numquestions').innerHTML = currentQuestion + "/" + numQuestions;
    
    document.getElementById('q1').innerHTML = quizData[currentQuestion-1][1];
    document.getElementById('q2').innerHTML = quizData[currentQuestion-1][2];
    document.getElementById('q3').innerHTML = quizData[currentQuestion-1][3];
    document.getElementById('q4').innerHTML = quizData[currentQuestion-1][4];
    
    document.getElementById('next').disabled = true;
    document.getElementById('checkAnswer').disabled = false;
}

// Hide the questions and show the results
function showResults(){
    console.log("showresults");

    document.getElementById('next').style.display = 'none';
    document.getElementById('checkAnswer').style.display = 'none';
    document.getElementById('quizoptioncontainer').style.display = 'none';

    document.getElementById('endQuiz').style.display = 'block';

    document.getElementById('question').innerHTML = "Your score: " + ((score/numQuestions)*100) + "%";
    document.getElementById('score').value = ((score/numQuestions)*100);
    document.getElementById('numquestions').innerHTML = score + "/" + numQuestions;
}

// Check the answer the user selected with the correct answer
function checkAnswer(){
    
    userSelected = document.getElementsByName('option');

    userSelectedVal = '';

    for(i = 0; i < userSelected.length; i++) {
        if(userSelected[i].checked){
            userSelectedVal = userSelected[i].id;
        }
        userSelected[i].disabled = true;
    }

    if(userSelectedVal == quizData[currentQuestion-1][quizData[currentQuestion-1].length-1]){
        score++;
    }

    currentVal = document.getElementById('q' + quizData[currentQuestion-1][quizData[currentQuestion-1].length-1]);
    console.log(currentVal);
    currentVal.innerHTML += "&#9;<strong>Correct Answer</strong>";

    document.getElementById('next').disabled = false;
    document.getElementById('checkAnswer').disabled = true;
}

// Load next question
function next(){
    userSelected = document.getElementsByName('option');

    for(i = 0; i < userSelected.length; i++) {
        userSelected[i].disabled = false;
        userSelected[i].checked = false;
    }

    if(currentQuestion != numQuestions){
        currentQuestion++;
        loadQuestion();
    }else{
        currentQuestion = 1;
        showResults();
    }
}

// Redirect to the homepage once save is complete
function saveScore(path){
    sScore = ((score/numQuestions)*100);
    console.log("save!");

    window.location.href = path + "saveQuiz.php?score=" + sScore + "%&quiz=" + quizId;
}

