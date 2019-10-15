<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width" initial-scale=1>
	<title>Engineering Projects - Login</title>
	<link rel="stylesheet" type="text/css" href="css\all.css">
	<link rel="stylesheet" type="text/css" href="css\style.css"/>
</head>
<body>
	<div id="login_details">
		<div class="stu_login">
			<div class="stu_div">
				<h6>Student</h6>
				<form action="">
					<div class="input_grp">
						<input type="email" name="email" id="stu_email" placeholder="Email Id">
					</div>
					<div class="input_grp">
						<input type="password" name="password" id="stu_password" placeholder="Password">
					</div>
					<div class="submit_div">
						<button type="submit">Submit</button>
						<a class="forgotpass" href="javascript:void(0)">Forgot Password ?</a>
					</div>
					<a href="signup.php">Dont have an account? Signup</a>
				</form>
			</div>
		</div>
		<div class="exp_login">
			<div class="exp_div">
				<h6>Expert</h6>
				<form action="">
					<div class="input_grp">
						<input type="email" name="email" id="exp_email" placeholder="Email Id">
					</div>
					<div class="input_grp">
						<input type="password" name="password" id="exp_password" placeholder="Password">
					</div>
					<div class="submit_div">
						<button type="submit">Submit</button>
						<a class="forgotpass" href="javascript:void(0)">Forgot Password ?</a>
					</div>
					<a href="signup.php">Dont have an account? Signup</a>
				</form>
			</div>
		</div>
	</div>
</body>
<script type="text/javascript" src="js\jquery-3.2.1.min.js"></script>
</html>