<?php
	$path = "../";
	$page_title = "Register";
    include($path . "header.php");

	// If doing this for my project, check each individual field in a function or ifelse so you can give feedback.
	if(!empty($_POST['uname']) && !empty($_POST['pass']) && !empty($_POST['pass2']) && passMatch($_POST['pass'], $_POST['pass2'])){
		$uname = $_POST['uname'];
		$pass = $_POST['pass'];
		$pass2 = $_POST['pass2'];

		$uname = filter_var($uname, FILTER_SANITIZE_STRING);
		$pass = filter_var($pass, FILTER_SANITIZE_STRING);
		$pass2 = filter_var($pass2, FILTER_SANITIZE_STRING);

		if(uniqueUser($conn, $uname)==true){
			$hash_password = password_hash($pass, PASSWORD_DEFAULT);

			$stmt = $conn->prepare("INSERT INTO `240Login` (`uname`, `pass`) VALUES (?,?);"); // Prepared Statement
			$stmt->bind_param("ss", $uname, $hash_password);
			$stmt->execute();
			$stmt->close();

			header("Location: login.php");
		}else{
			?>
			<div class="invalid-container">
				<h4 class="invalid-txt">Username already exists! Try again!</h4>
			</div>
			<?php
		}
	}else if(!empty($_POST['uname']) && !empty($_POST['pass']) && !empty($_POST['pass2'])){
		?>
		<div class="invalid-container">
			<h4 class="invalid-txt">Passwords do not match! Try again!</h4>
		</div>
		<?php
	}

	function passMatch($pass1, $passw2){
		if(strcmp($pass1, $passw2)==0){
			return true;
		}else{
			return false;
		}
	}

	function uniqueUser($conn, $checkUser){
		$newconn = $conn;
		$stmt = $newconn->prepare("SELECT COUNT(*) AS `numUsers` FROM `240Login` WHERE `uname` = ?;"); // Prepared Statement -> probably should select only the password?
		$stmt->bind_param("s", $checkUser);
		$stmt->execute();
		
		// This gives you the results.
		$results = $stmt->get_result();
		$numUsers = 0;
		while($row = $results->fetch_assoc()){
			$numUsers = $row['numUsers'];
		}

		if($numUsers == 0){
			return true;
		}else{
			return false;
		}
	}
?>

<body>
	<div class = "logincontainer">
		<form class = "login-form" action = "<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
			<div class="inputcontainer">
				<input class = "logininput" type="text" name="uname" size="30" placeholder="Username" />
			</div>
			<div class="inputcontainer">
				<input class = "logininput" type="password" name="pass" size="30" placeholder="Password"/>
			</div>
			<div class="inputcontainer">
				<input class = "logininput" type="password" name="pass2" size="30" placeholder="Confirm Password"/>
			</div>
<!--
			<div class="inputcontainer">
				<input disabled class = "logininput" type="file" id="pfp" name="pfp"/>
			</div>
-->
			<div class="loginregister">
				<input class = "loginbtn" type="submit" value="REGISTER" />
				<p class="smalltxt">Already have an account? <a href="login.php">Login</a>
			</div>	
		</form>
	</div>
<?php
    include($path . "footer.php");
?>
