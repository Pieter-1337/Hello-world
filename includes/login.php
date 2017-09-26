<?php
session_start();
require_once('../connect.php');

if(isset($_POST) AND !empty($_POST)){
	$emaillogin = $_POST['emaillogin'];
	$passwordlogin = md5($_POST['passwordlogin']);

	$sqllogin = "SELECT * FROM `login` WHERE Email = '$emaillogin' OR Username = '$emaillogin' AND Password = '$passwordlogin'";
	$resultlogin = mysqli_query($connection, $sqllogin);
	$count = mysqli_num_rows($resultlogin);
	
	if($count == 1){
		$_SESSION['user'] = $resultlogin;
		while($row = mysqli_fetch_array($resultlogin, MYSQLI_ASSOC)){
		$row['Username'];
		$row['Firstname'];
		$row['Lastname'];
		$row['Email'];
	}
		$url = "../index.php";
		$messageok = "User login succesfull!";
		echo "<script type='text/javascript'>alert('$messageok');</script>";
		echo '<script>window.location = "'.$url.'";</script>';
	}else{
		$url = "../index.php";
		$messagenok = "User login failed!";
		echo "<script type='text/javascript'>alert('$messagenok');</script>";
		echo '<script>window.location = "'.$url.'";</script>';
	}
}

?>