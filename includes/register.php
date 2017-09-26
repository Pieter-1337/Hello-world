<?php
require_once('../connect.php');

if(isset($_POST) AND !empty($_POST)){
	
	$firstname = mysqli_real_escape_string($connection, $_POST['firstname']);
	$lastname = mysqli_real_escape_string($connection, $_POST['lastname']);
	$email = mysqli_real_escape_string($connection, $_POST['email']);
	$username = mysqli_real_escape_string($connection, $_POST['username']);
	$password = md5($_POST['password']);

	$sql = "INSERT INTO `login` (Firstname, Lastname, Email, Username, Password) VALUES ('$firstname', '$lastname', '$email', '$username', '$password')";



	$result = mysqli_query($connection, $sql);
	if($result){
		$url = "../index.php";
		$messageok = "User registration succesfull!";
		echo "<script type='text/javascript'>alert('$messageok');</script>";
		echo '<script>window.location = "'.$url.'";</script>';
		

	}else{
		$url = "../index.php";
		$messagenok = "User registration failed!";
		echo "<script type='text/javascript'>alert('$messagenok');</script>";
		echo '<script>window.location = "'.$url.'";</script>';
	}
}?>