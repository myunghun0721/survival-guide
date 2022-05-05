<?php
    session_name("iste250t25-login");
    session_start();
    session_destroy();
    header("Location: ../index.php");
?>
