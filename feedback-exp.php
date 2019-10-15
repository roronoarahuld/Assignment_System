<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width" initial-scale=1>
	<title>Engineering Projects - Feedback</title>
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
			<div class="content-area">
				<div class="content-row">
					<a class="back-btn" href="javascript:void(0)"><i class="fas fa-chevron-left"></i></i> Back</a>
					<h5>Give us you feedback</h5>
					<form action="">
						<div class="input-grp">
							<input type="text" name="title" id="Title" placeholder="Title">
						</div>
						<div class="input-grp">
							<textarea id="body" rows="8" placeholder="Write your message"></textarea>
						</div>
						<div class="choose-file">
							<h6>Upload screenshot (Optional)</h6>
							<input type="file" name="myFile" multiple><br/><br/>
						</div>
						<div class="submit-div">
							<button type="submit">Send</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
</body>
<script type="text/javascript" src="js\jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="js\main.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$(".feed-li svg").css("fill","#4977fc");
		$(".feed-li span").css("color","#4977fc");
	});
</script>
</html>