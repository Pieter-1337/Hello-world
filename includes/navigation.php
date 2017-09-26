<?php 
session_start();
require_once('connect.php');

if(isset($_POST) AND !empty($_POST)){
	$emaillogin = mysqli_real_escape_string($connection, $_POST['emaillogin']);
	$passwordlogin = md5($_POST['passwordlogin']);

	$sqllogin = "SELECT * FROM `login` WHERE (Email = '$emaillogin' OR Username = '$emaillogin') AND Password = '$passwordlogin'";

	$resultlogin = mysqli_query($connection, $sqllogin);
	$count = mysqli_num_rows($resultlogin);

	



	

	if($count == 1){
		$_SESSION['user'] = $resultlogin;
		while($row = mysqli_fetch_array($resultlogin, MYSQLI_ASSOC)){
		$username = $row['Username'];

		
	}
		$url = "index.php";
		$messageok = "User login succesfull!";
		echo "<script type='text/javascript'>alert('$messageok');</script>";
		echo '<script>window.location = "'.$url.'";</script>';
	}else{
		$url = "index.php";
		$messagenok = "User login failed!";
		echo "<script type='text/javascript'>alert('$messagenok');</script>";
		echo '<script>window.location = "'.$url.'";</script>';
	}
}


?>
<div id="myLeftRow" class="leftrow" style="display: inline-block;">
	<div class="leftrow-row">
	<?php

	if(isset($_SESSION['user'])){
		
			echo "<button onclick='profilelink()' class='button' id='profilebutton'></button>";

			echo "<form method='POST' action='includes/logout.php'><button type='submit 'class='button' id='logoutbutton'>Logout</button></form>";
			echo $row['Username'];
	}
	else{ 
		
			echo "<button onclick='logintoggle()' class='button' id='loginbutton'>Login</button>";

			echo "<button onclick='registertoggle()' class='button' id='registerbutton'>Register</button>";
	}
?>

		<img onclick="togglemenu()" id="myHamburger" class="hamburger-menu" src="images/hamburger.png" />
		
</div>
	<div class="leftrow-row">
		<ul>
			<a class="nav-links" href="index.php"><li class="nav-items">Home</li></a>
			<a class="nav-links" href="about.php"><li class="nav-items">About me</li></a>
			<a class="nav-links" href="profession.php"><li class="nav-items">My profession</li></a>
			<a class="nav-links" href="hobby.php"><li class="nav-items">My hobby's</li></a>
			<a class="nav-links" href=contact.php><li class="nav-items">Contact me</li></a>
		</ul>
		
	</div>
</div>



<script type="text/javascript" src="js/togglemenu.js"></script>
<script type="text/javascript" src="js/jslinks.js"></script>