<?php 
//include_once 'includes/register.inc.php';
//include_once 'includes/functions.php';
?> 
<!DOCTYPE HTML>
<HTML>
<head>
    <meta charset="UTF-8">
    <script src="../js/jquery-2.1.1.min.js"></script>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../assets/fonts/fonts.css">
    <meta name="viewport" content="initial-scale=1.0">
    <title>LeadTheBoard!</title>
    <meta name="description" content="">
    <link rel="icon" href="../favicon.png" type="image/png">
</head>
<body>
<div class="wrapper">
	<div class="nav">
		<a href="/"><div id="logo">LeadTheBoard!</div></a>
		<div class="user" id="loggedOut" onClick="loginClick()"> Login/Register </div>
		<div class="user" id="loggedIn" style="display:none;"> Hello, Name <span class="downArrow">&#9660;</span></div>
	</div>
	<div class="loginContainers">
		<!-- Login form -->
		<div class="entryForm" id="login">
			<div class="loginDiv">
			<div class="icon-cross" onclick="closeEntry()"></div>
			<h3> Login to LeadTheBoard!</h3>
			<form style="overflow: auto;">
				<input class="field loginEmail" type="email" placeholder="Email Address">
				<input class="field loginPassword" type="password" placeholder="Password">
				<div class="formSubmit">
					<p class="clickable" onclick="forgotClick()"> Forgot password? </p>
					<input type="submit" class="submit loginSubmit" value="Login">
				</div>
			</form>
			</div>
			<div class="loginDiv formBottom">
				<p>Get a free account</p> <input type="button" class="register" onclick="registerClick()" value="Register" />
			</div>
		</div>
		<!-- Forgot password form -->
		<div class="entryForm" id="forgot">
			<div class="loginDiv">
			<div class="icon-cross" onclick="closeEntry()"></div>
			<h3> Reset Password</h3>
			<p> Enter your registered email below and we'll send you a new password </p>
			<form style="overflow: auto;">
				<input class="field forgotEmail" type="email" placeholder="Email Address">
				<div class="formSubmit">
					<input type="submit" class="submit loginSubmit" value="Request new password">
				</div>
			</form>
			</div>
			<div class="loginDiv formBottom">
				<p>Know your password?</p> <input type="button" class="register" onclick="registerLoginClick()" value="Login" />
			</div>
		</div>
		<!-- Register form -->
		<div class="entryForm" id="register">
			<div class="loginDiv">
			<div class="icon-cross" onclick="closeEntry()"></div>
				<h3> Register for LeadTheBoard!</h3>
				<?php 
				//if (!empty($error_msg)) {
				//	echo $error_msg;
				//}
				?>
				<form style="overflow: auto;" action="<?php // echo esc_url($_SERVER['PHP_SELF']); ?>" method="post" name="registration_form">
					<input class="field registerFirstName" type="text" name="firstName" id="firstName" placeholder="First Name">
					<input class="field registersurname" type="text" name="surname" id="surname"placeholder="Second Name">
					<input class="field registerEmail" type="email" name="email" id="email"placeholder="Email Address">
					<input class="field registerPassword" type="password" name="password" id="password"placeholder="Password">
					<input class="field registerConfirmPassword" type="password" name="confirmpass" id="confirmpass"placeholder="Confirm Password">
					<p> Note: Only account administrators should register here. Students will be provided with their logins by the admin </p>
					<div class="formSubmit">
						<input type="button" class="submit registerSubmit" value="Register" onclick="return regformhash(this.form,
																														this.form.firstName
																														this.form.surname
																														this.form.email
																														this.form.password
																														this.form.confirmpass);" />
					</div>
				</form>
			</div>
			<div class="loginDiv formBottom">
				<p>Already got an account?</p> <input type="button" class="register" onclick="registerLoginClick()" value="Login" />
			</div>
		</div>	
	</div>

	<div class="contentContainer">


