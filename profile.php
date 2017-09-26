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

		<p class="title">ELIF IS THE BEST</p>
	</div>	
	<div class="rightrow-content">
		
		<div class="profile-info-box">
			<button class="profile-edit-btn">EDIT</button>
			<ul class="profile-ul">
				<li class="profile-list">First-name:</li>
				<li class="profile-list">Last-name:</li>
				<li class="profile-list">Username:</li>
				<li class="profile-list">Email:</li>
			</ul>
			
		</div>

		<div class="profile-info-box" id="box2-profile">

			<img class="profile-img" src="images/profileplaceholder.jpg" />

			<button class="profile-edit-btn">EDIT</button>
		</div>

	</div>
</div>




<?php include 'includes/loginpopup.php'; ?>
<?php include 'includes/registerpopup.php'; ?>
<script type="text/javascript" src="js/registerpopup.js"></script>
<script type="text/javascript" src="js/loginpopup.js"></script> 
</body>



</html>