<!DOCTYPE html>
<html>
<head>
	<title><?=$title?></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<link rel="stylesheet" type="text/css" href="../app/View/resources/css/index.css">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
	<script type="text/javascript" defer src="../app/View/resources/js/library/jquery.min.js"></script>
	<script type="text/javascript" defer src="../app/View/resources/js/scripts.js"></script>
</head>
<body>
	<div class="login">
		<div class="float">
			<div class="logo-div">
				<div class="img-div">
					<img src="../app/View/resources/img/logo.png" class="logo-img">
				</div>
				<div class="label-div">
					<label class="logo-label">Localize</label>
				</div>
			</div>
			<div class="form-div">
				<form method="POST" action="/login" id="login-form">
					<div class="label-form">
						<label id="singup">Sing Up</label>
					</div>
					<div class="txt-div">
						<div class="email-div">
							<label>Email</label>
							<input type="email" id="email"  name="email" class="email-input" placeholder="email@example.com">
						</div>
						<div class="password-div">
							<label>Password</label>
							<input type="password" id="password"  name="password" class="password-input">
						</div>
					</div>
					<div class="checkbox-div">
						<input type="checkbox" class="checkbox-input" id="ckb"> 
						<label for="ckb">Keep me looged in</label>
					</div>
					<div class="message-div">
						<span class="error-login errors"><?=$erro?></span>
					</div>
					<div class="btn-forgot-div">
						<div class="btn-div">
							<input type="submit" value="Sing in" class="btn-input" id="btn">
						</div>
						<div class="forgot-div">
							<a href="/forgot"><label class="forgot-label">Forgot my password</label></a>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<div class="hidden" id="register">
		<form class="singup" method="post" action="/register" id="register-form">
			<div class="btn-close">
				<a type="button" id="btn_close">&#10005;</a>
			</div>
			<div class="registre">
				<label>Register</label>
			</div>
			<div class="txt-singup-div">
				<span class="error-singup errors"></span>
				<div class="txt-singup">
					<label class="singup-label" required >Name *</label><br>
					<input type="text" required name="name" placeholder="Your Name">
				</div> 
				<div class="txt-singup">
					<label class="singup-label" required >Email *</label><br>
					<input type="text" required name="email" id="email-register" placeholder="email@example.com"><br>
					<span  class="error-email errors"></span>
				</div>
				<div class="txt-singup"> 
					<label class="singup-label">Phone *</label><br>
					<input id="phone" type="text" required name="phone" placeholder="(00) 0 0000-0000">
				</div>
				<div class="txt-singup">
					<label class="singup-label" >Password *</label><br>
					<input type="password" required name="password" id="password-register" placeholder="Required a less 6 characters" ><br>
					<span  class="error-password errors"></span>
				</div>
				<div class="txt-singup">
					<label class="singup-label" >Confirm Password *</label><br>
					<input type="password" id="confirmation-password" required ><br>
					<span  class="error-confirmation errors"></span>
				</div>
			</div>
			<div class="btn-singup">
				<input type="submit" value="Sing Up">
			</div>
		</form>
	</div>
	<script src="../app/View/resources/js/library/vanilla-masker.min.js"></script>
</body>
</html>