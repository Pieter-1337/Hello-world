<?php session_start(); ?>




<div class="popupscreen" id="loginpopup">
	<div class="formwrapper">
		<div class="login-form">
		<form action="" method="POST">

			<label class="popuplabel"><p>Email/Username</p></label>
			<input name="emaillogin" class="popupinput" placeholder="email/username" />

			<label class="popuplabel"><p>Password</p></label>
			<input name="passwordlogin" class="popupinput" placeholder="password" />

		
			<button class="popupbutton" type="submit"><p>Login</p></button>
		</form>
		<button onclick="closelogin()" class="popupbutton"><p>Close</p></button>
	</div>
	
	</div>
</div>
