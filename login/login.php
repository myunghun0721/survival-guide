<?php
	$path = "../";
	$page_title = "Login";
    include($path . "header.php");

	$invalid = false;

	if(!empty($_POST['uname']) && !empty($_POST['pass'])){
		$uname = $_POST['uname'];
		$pass = $_POST['pass'];

		// Sanitize Data
		$uname = filter_var($uname, FILTER_SANITIZE_STRING);
		$pass = filter_var($pass, FILTER_SANITIZE_STRING);

		// This is getting one result/column from the table
		$stmt = $conn->prepare("SELECT `pass`, `admin` FROM `240Login` WHERE `uname` = ?;"); // Prepared Statement -> probably should select only the password?
		$stmt->bind_param("s", $uname);
		$stmt->execute();
		
		// This gives you the results.
		$results = $stmt->get_result();
		$hashedpass = '';
		while($row = $results->fetch_assoc()){
			$hashedpass = $row['pass'];
			$admin = $row['admin'];
		}
		/*
		$stmt->bind_result($res);
		$stmt->fetch();

		$hashedpass = $res['pass'];*/
		
		// Next step: Password verification!
		if(password_verify($pass,$hashedpass)){
			session_name("iste250t25-login");
			session_start();

			$_SESSION['login'] = true;
			$_SESSION['name'] = $uname;

			header('Location: ../index.php'); // This is how you do a re-direct in PHP
		}else{
			?>
			<div class="invalid-container">
				<h4 class="invalid-txt">Invalid Username or Password. Try again.</h4>
			</div>
			<?php
		}


		//var_dump($res);

		$stmt->close();
	}

?>

	<div class = "logincontainer">
		<form class = "login-form" action = "<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
			<div class="inputcontainer">
				<input class = "logininput" type="text" name="uname" size="30" placeholder="Username" />
			</div>
			<div class="inputcontainer">
				<input class = "logininput" type="password" name="pass" size="30" placeholder="Password"/>
			</div>
			<div class="loginregister">
				<input class = "loginbtn" type="submit" value="LOGIN" />
				<p class="smalltxt">Don't have an account? <a href="register.php">Register</a>
			</div>	
		</form>
	</div>
<?php
    include($path . "footer.php");
?>
