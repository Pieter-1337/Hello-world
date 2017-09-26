<?php
session_start();
?>
<!DOCTYPE HTML>

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1"/>



<link rel="stylesheet" type="text/css" href="css/stylesheet.css" />

</head>


<body>

<?php include 'includes/navigation.php'; ?>

<div class="rightrow">
	<div class="rightrow-row">
		<img onclick="togglemenuback()" id="myHamburger2" class="hamburger-menu2" src="images/hamburger.png" style="display:none" />

		<p class="title">Welcome to my site!</p>
	</div>
	<div class="rightrow-content">
	About page
	</div>
</div>


<?php include 'includes/loginpopup.php'; ?>
<?php include 'includes/registerpopup.php'; ?>
<script type="text/javascript" src="js/registerpopup.js"></script>
<script type="text/javascript" src="js/loginpopup.js"></script> 
</body>



</html>