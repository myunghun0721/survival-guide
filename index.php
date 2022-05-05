<?php 
    $path = "./";
    $page_title = "Home";
    include($path . "header.php");
?>
	<div class="contentbackgroundcolor">
	<div class="main">
		<h1 class="mainh1">Wild, <br> Roaring <br> Tough.</h1>
		<h1 class="mainh2">Here is what you <br> need to know <br>to survive in<br>Wild Unix World</h1>

		<img class="mount" class="mainpageimg" src="assets/media/main.png">
		<img class="guideimg" class="mainpageimg" src="assets/media/Group_39.png">
	</div>

	<h2 class="hr-sect">Hottest Topics</h2>

	<div class="Topics">
		<div class="Topic">
			<h2>UNIX and LINUX</h2>
			<p> Preparing you for what Unix and <br> Linux are about, what they’re <br> made of, and a little bit on <br> how they work</p>
			<a href = "c/unix_linux.php"><img class="unix" src="assets/media/unix.png" alt="unix"> </a>
			
		</div>
		<div class="Topic">
		<h2>The Terminal </h2>
			<p> An overview of the terminal, <br> navigating files and directories, <br> how to read permissions, and an <br> explanation on user categories</p>
			<a href = "c/terminal.php"><img class="terminal" src="assets/media/Asset3.png"> </a>
		</div>
		<div class="Topic">
		<h2>Publishing</h2>
		<p> A short guide on the technologies <br> behind remotely connecting to <br>and securely transferring files <br>to and from UNIX systems</p>
			<a href = "c/publishing.php"><img class="pub" src="assets/media/Asset2.png"> </a>
		</div>
		<div class="Topic">
		<h2>Appendix / References</h2>
		<p>Appendix and References for <br> this website</p>
			<a href = "appendix.php"><img class="appen" src="assets/media/Asset4.png"> </a>
		</div>
		<!-- <div class="Topic">
		<h2>UNIX and LINUX</h2>
			<a href = "#"><img src="https://via.placeholder.com/100"> </a>
			<p> Lorem ipsum dolor sit adipiscing elit</p>
		</div>
		<div class="Topic">
		<h2>UNIX and LINUX</h2>
			<a href = "#"><img src="https://via.placeholder.com/100"> </a>
			<p> Lorem ipsum dolor sit adipiscing elit</p>
		</div>
		<div class="Topic">
		<h2>UNIX and LINUX</h2>
			<a href = "#"><img src="https://via.placeholder.com/100"> </a>
			<p> Lorem ipsum dolor sit adipiscing elit</p>
		</div> -->
	</div>

	<h2 class="hr-sect">Recently Viewed</h2>

	<div class="Topics2">
	<div class="Topic">
			<h2>UNIX and LINUX</h2>
			<p> Preparing you for what Unix and <br> Linux are about, what they’re <br> made of, and a little bit on <br> how they work</p>
			<a href = "c/unix_linux.php"><img class="unix" src="assets/media/unix.png" alt="unix"> </a>
			
		</div>
		<div class="Topic">
		<h2>The Terminal </h2>
			<p> An overview of the terminal, <br> navigating files and directories, <br> how to read permissions, and an <br> explanation on user categories</p>
			<a href = "c/terminal.php"><img class="terminal" src="assets/media/Asset3.png"> </a>
		</div>
		<div class="Topic">
		<h2>Publishing</h2>
		<p> A short guide on the technologies <br> behind remotely connecting to <br>and securely transferring files <br>to and from UNIX systems</p>
			<a href = "c/publishing.php"><img class="pub" src="assets/media/Asset2.png"> </a>
		</div>
		<div class="Topic">
		<h2>Appendix / References</h2>
		<p>Appendix and References for <br> this website</p>
			<a href = "appendix.php"><img class="appen" src="assets/media/Asset4.png"> </a>
		</div>


	</div>
</div>

	<h2 class="hr-sect1">Table of contents</h2>
	<div class="content">
		<div onclick="item1()" class="item-1">
			<h1>UNIX and LINUX</h1>
			<div id="myDropdown1" class="dropdown-content" style="display: none;">
				<a href="c/unix_linux.php#intro">Intro</a>
				<a href="c/unix_linux.php#deepdive">Deeper Dive</a>
				<a href="c/unix_linux.php#recap">Recap</a>
			</div>
		</div>
		<div onclick="item2()" class="item-2">
			<h1>The Terminal</h1>
			<div id="myDropdown2" class="dropdown-content" style="display: none;">
				<a href="c/terminal.php#directories">Directories</a>
				<a href="c/terminal.php#cmds">Commands</a>
				<a href="c/terminal.php#permissions">Permissions</a>

			</div>
		</div>
		<div onclick="item3()" class="item-3">
			<h1>Publishing</h1>
			<div id="myDropdown3" class="dropdown-content" style="display: none;">
				<a href="c/publishing.php#overview">SFTP and SSH</a>
				<a href="c/publishing.php#ssh">SSH</a>
				<a href="c/publishing.php#sftp">SFTP</a>
				<a href="c/publishing.php#remote">Remote Shell Clients</a>
				<a href="c/publishing.php#summary">Summary</a>
				

			</div>
		</div>
		<div onclick="item4()" class="item-4">
			<h1>Appendix</h1>
			<div id="myDropdown4" class="dropdown-content" style="display: none;">
				<a href="appendix.php">Meeting Minutes</a>
				<a href="appendix.php">References and work cited</a>
			</div>
		</div>
		<!-- <div onclick="item5()" class="item-5">
			<h1>Topic 5</h1>
			<div id="myDropdown5" class="dropdown-content" style="display: none;">
				<a href="#home">content1</a>
				<a href="#about">content2</a>
				<a href="#contact">content3</a>
			</div>
		</div> --> 
		<div class="item-6">
			<h1 class="item6">Team Akrasia’s Unix and Linux Survival Guide is here to save the day!</h1>
			<p> Our guide will give you everything you need to make sure you’re prepared for your first steps into the world of publishing your website on Unix and Linux-based systems and all the wild critters you’ll encounter on your way there.
				To give you a quick glimpse into your experience, you’ll likely come upon some of the following local animalia. Click below to read up and make sure you’re prepared!
</p>
		</div>

	</div>
</div>
	<br>
	
	<footer>
		<img src="assets/media/logo50.png">
	</footer>
	  <script src="assets/js/script.js"></script>

</body>
</html>