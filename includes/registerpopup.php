<?php session_start(); ?>




<div class="popupscreen" id="registerpopup">
	<div class="formwrapper">
		<div class="login-form">
		<form action="includes/register.php" method="POST">
			<label class="popuplabel">First-name</label>
			<input name="firstname" placeholder="first-name" class="popupinput" />

			<label class="popuplabel">Last-name</label>
			<input name="lastname" placeholder="last-name" class="popupinput" />

			<label class="popuplabel">Email</label>
			<input name="email" placeholder="email" class="popupinput" />

			<label class="popuplabel">Username</label>
			<input name="username" placeholder="username" class="popupinput" />

			<label class="popuplabel">Password</label>
			<input name="password" placeholder="password" class="popupinput" />

			<button class="popupbutton" type="submit">Register</button>
		</form>
			<button onclick="closeregister()" class="popupbutton">Close</button>
	</div>
		
	</div>
</div>
