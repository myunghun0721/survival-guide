<?php 
    if(!empty($_GET['score']) && !empty($_GET['quiz'])){
        session_name("iste250t25-login");
        session_start();

        if(empty($_SESSION['login']) || !$_SESSION['login']){
            // user is not logged in
            header("Location: index.php");
        }else{
            include('dbconf.php');

            $val = $_GET['score'];
            $quiz_num = $_GET['quiz'];
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

            if($quiz_num == 1){
                header("Location: terminal.php");
            }elseif($quiz_num == 2){
                header("Location: publishing.php");
            }else{
                header("Location: index.php");
            }
        }
    }

?>