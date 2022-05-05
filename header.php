<?php 
    include($path . "dbconf.php");
?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title><?php echo $page_title; ?></title>
      <!-- Style Sheet -->
      <link rel="stylesheet" type="text/css" href ="<?php echo $path ?>assets/css/style.css">
      
      <script src="<?php echo $path ?>assets/js/header.js"></script>
   </head>
   
   <body>
      <!-- Navigation Bar (Image + Pages) -->
      <nav class="dropdown">
        <div class="navleft">
            <div class="hamburgermnu" onclick="menudrop()">
                <span class="ham"></span>
                <span class="ham"></span>
                <span class="ham"></span>
            </div>

            <img class="logo" onclick="home('<?php echo $path; ?>');" src="<?php echo $path ?>assets/media/logo50.png">
        </div>
        <div class="navright">
            <?php 
                if($page_title != "Login"){
                    session_name("iste250t25-login");
                    session_start();
                }

                if(empty($_SESSION['login']) || !$_SESSION['login']){ // If not logged in OR login isn't set
                    // user is not logged in
                    ?>
                    <!-- SHOW THIS WHEN THE USER IS NOT LOGGED IN! -->
                        <div class="login" onclick="login('<?php echo $path; ?>')">
                            <div class="login-btn">
                                <h3>Login/Signup</h3>
                            </div>
                        </div>
                 <?php
                 }else{
                    // user is logged in
                    ?>
                        <!-- SHOW THIS WHEN THE USER IS LOGGED IN! -->
                        <div class="login" onclick="logout('<?php echo $path; ?>')">
                            
                                <h3>Hello,<br/><?php echo $_SESSION['name']?></h3>
                            
                        </div>

                 <?php
                 }
            ?>

        </div>
      </nav>

    <div id="menu" class="menu" style="display: none;">
        <ul class="menucontainer">
            <li class="menuitem single" onclick="home('<?php echo $path; ?>');">
                <a href="<?php echo $path; ?>index.php">Home</a>
            </li>
            <li class="menuitem">
                <a href="<?php echo $path ?>c/unix_linux.php">Unix/Linux</a>
                <ul class="submenu">
                    <li class="dropdownItem" onclick="changePage('<?php echo $path; ?>', 'c/unix_linux.php#intro');">Introduction</li>
                    <li class="dropdownItem" onclick="changePage('<?php echo $path; ?>', 'c/unix_linux.php#deepdive');">Deeper Dive</li>
                    <li class="dropdownItem" onclick="changePage('<?php echo $path; ?>', 'c/unix_linux.php#recap');">Summary</li>
                 </ul>
            </li>
            <li class="menuitem">
                <a href="<?php echo $path ?>c/terminal.php">The Terminal</a>
                
                <ul class="submenu">
                    <li class="dropdownItem" onclick="changePage('<?php echo $path; ?>', 'c/terminal.php#directories');">Directories</li>
                    <li class="dropdownItem" onclick="changePage('<?php echo $path; ?>', 'c/terminal.php#cmds');">Commands</li>
                    <li class="dropdownItem" onclick="changePage('<?php echo $path; ?>', 'c/terminal.php#permissions');">Permissions</li>
                 </ul>
            </li>
            <li class="menuitem">
                <a href="<?php echo $path ?>c/publishing.php">Publishing (SFTP & SSH)</a>

                <ul class="submenu">
                    <li class="dropdownItem" onclick="changePage('<?php echo $path; ?>', 'c/publishing.php#overview');">FTP and SSH</li>
                    <li class="dropdownItem" onclick="changePage('<?php echo $path; ?>', 'c/publishing.php#ssh');">SSH</li>
                    <li class="dropdownItem" onclick="changePage('<?php echo $path; ?>', 'c/publishing.php#sftp');">SFTP</li>
                    <li class="dropdownItem" onclick="changePage('<?php echo $path; ?>', 'c/publishing.php#remote');">Remote Shell Clients</li>
                    <li class="dropdownItem" onclick="changePage('<?php echo $path; ?>', 'c/publishing.php#summary');">Summary</li>
                 </ul>
            </li>       
            
            <li class="menuitem">
                <a href="appendix.php">Appendix/References</a>
            </li>           
        </ul>
    </div>

