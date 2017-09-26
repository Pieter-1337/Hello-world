<?php
session_start();
session_destroy();
$messageok = "User logout succesfull!";
		echo "<script type='text/javascript'>alert('$messageok');</script>";
$url = "../index.php";
echo '<script>window.location = "'.$url.'";</script>';
?>
