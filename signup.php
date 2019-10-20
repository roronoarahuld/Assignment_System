<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width" initial-scale=1>
	<title>Engineering Projects - Login</title>
	<link rel="stylesheet" type="text/css" href="css\all.css">
	<link rel="stylesheet" type="text/css" href="css\style.css"/>
	<script type="text/javascript">
        window.history.forward();
        function noBack() { window.history.forward(); }
    </script>
</head>
<body onload="noBack();" onpageshow="if (event.persisted) noBack();" onunload="">
	<div id="signup_details">
		<div class="stu_login">
			<div class="stu_div">
				<h6>Student</h6>
				<form action="add_user.php" method="post">
					<input type="Hidden" id="asm_type" name="asm_type" value="Student">
					<div class="input_grp">
						<input type="text" name="stu_name" id="stu_name" placeholder="Name">
					</div>
					<div class="input_grp">
						<input type="email" name="stu_email" id="stu_email" placeholder="Email Id">
					</div>
					<div class="input_grp">
						<input type="text" name="stu_stream" id="stu_stream" placeholder="Stream">
					</div>
					<div class="input_grp">
						<input type="password" name="stu_password" id="stu_password" placeholder="Password">
					</div>
					<div class="submit_div">
						<button type="submit">Submit</button>
					</div>
					<a href="login.php">Have an account? Signin</a>
				</form>
			</div>
		</div>
		<div class="exp_login">
			<div class="exp_div">
				<h6>Expert</h6>
				<form action="add_user.php" method="post">
					<input type="Hidden" id="asm_type" name="asm_type" value="Expert">
					<div class="input_grp">
						<input type="text" name="exp_name" id="exp_name" placeholder="Name">
					</div>
					<div class="input_grp">
						<input type="email" name="exp_email" id="exp_email" placeholder="Email Id">
					</div>
					<div class="input_grp">
						<input type="text" name="exp_stream" id="exp_stream" placeholder="Stream">
					</div>
					<div class="input_grp">
						<input type="password" name="exp_password" id="exp_password" placeholder="Password">
					</div>
					<div class="submit_div">
						<button type="submit">Submit</button>
					</div>
					<a href="login.php">Have an account? Signin</a>
				</form>
			</div>
		</div>
	</div>
</body>
<script type="text/javascript" src="js\jquery-3.2.1.min.js"></script>
</html>