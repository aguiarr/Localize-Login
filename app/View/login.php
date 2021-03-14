<!DOCTYPE html>
<html>
<head>
	<title><?=$title?></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<link rel="stylesheet" type="text/css" href="../app/View/resources/css/styles.css">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
	
	<script type="text/javascript" defer src="../app/View/resources/js/main.js"></script>
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
							<input type="email" id="email" required name="email" class="email-input">
						</div>
						<div class="password-div">
							<label>Password</label>
							<input type="password" id="password" required name="password" class="password-input">
						</div>
					</div>
					<div class="checkbox-div">
						<input type="checkbox" class="checkbox-input" id="ckb"> 
						<label for="ckb">Keep me looged in</label>
					</div>
					<div class="message-div">
						<span class="message"><?=$erro?></span>
					</div>
					<div class="btn-forgot-div">
						<div class="btn-div">
							<input type="submit" value="Sing in" class="btn-input" id="btn">
						</div>
						<div class="forgot-div">
							<label class="forgot-label">Forgot my password</label>
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
				<div class="txt-singup">
					<label class="singup-label" required >Name</label><br>
					<input type="text" required name="name">
				</div> 
				<div class="txt-singup">
					<label class="singup-label" required >Email</label><br>
					<input type="text" required name="email">
				</div>
				<div class="txt-singup"> 
					<label class="singup-label">Phone</label><br>
					<input id="phone" type="text" required name="phone">
				</div>
				<div class="txt-singup">
					<label class="singup-label" >Password</label><br>
					<input type="password" required name="password">
				</div>
				<div class="txt-singup">
					<label class="singup-label" >Password Confirmation</label><br>
					<input type="password" required >
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