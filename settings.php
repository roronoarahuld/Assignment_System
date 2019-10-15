<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width" initial-scale=1>
	<title>Engineering Projects - Settings</title>
	<link rel="stylesheet" type="text/css" href="css\all.css">
	<link rel="stylesheet" type="text/css" href="css\style.css"/>
</head>
<body>
	<section id="create-assignments">
		<!-- Sidebar Menu -->
		<div class="sidebar" id="menu-nav">
			<script type="text/javascript" src="js\sidebar-expert.js"></script> </div>
		<div class="content-panel">
			<!-- Notifications Panel -->
			<div class="notification-bar" id="notify-corner">
				<script type="text/javascript" src="js\notifications.js"></script>
				
			</div>
			<div class="content-area settings">
				<div class="content-row">
					<a class="back-btn" href="javascript:void(0)"><i class="fas fa-chevron-left"></i></i> Back</a>
					<h5>Settings</h5>
					<form action="">
						<div class="input-grp">
							<h6>Change your Password</h6>
							<div class="input_div">
								<input type="password" name="old_password" id="password" placeholder="Old Password">
							</div>
							<div class="input_div">
								<input type="password" name="password" id="password_1" placeholder="New Password">
							</div>
							<div class="input_div">
								<input type="password" name="cfn_password" id="password_2" placeholder="Confirm Password">
							</div>
						</div>
						<div class="submit-div">
							<button type="submit">Save</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
</body>
<script type="text/javascript" src="js\query-3.2.1.min.js"></script>
<script type="text/javascript" src="js\main.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$(".set-li").css("background","#4977fc");
		$(".set-li a").css("color","#fff");
	});
</script>
</html>