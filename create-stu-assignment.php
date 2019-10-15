<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width" initial-scale=1>
	<title>Engineering Projects - Create Assignment</title>
	<link rel="stylesheet" type="text/css" href="css\all.css">
	<link rel="stylesheet" type="text/css" href="css\style.css"/>
</head>
<body>
	<section id="create-assignments">
		<!-- Sidebar Menu -->
		<div class="sidebar" id="menu-nav">
			<script type="text/javascript" src="js\sidebar-student.js"></script>
		</div>
		<div class="content-panel">
			<!-- Notifications Panel -->
			<div class="notification-bar" id="notify-corner">
				<script type="text/javascript" src="js\notifications.js"></script>
				
			</div>
			<div class="content-area">
				<div class="content-row">
					<a class="back-btn" href="javascript:void(0)"><i class="fas fa-chevron-left"></i></i> Back</a>
					<h5>Create Assignment</h5>
					<form action="add_assign_stu.php" method="post" enctype="multipart/form-data">
						<div class="input-grp">
							<input type="text" name="topic" id="topic" placeholder="Write/ Topic/ Chapter/ Subject Name">
						</div>
						<div class="input-grp">
							<textarea name="descp" id="descp" rows="8" placeholder="Write Description (Optional)"></textarea>
						</div>
						<div class="choose-file">
							<h6>Upload Image/ PDF/ Word/ Doc File (Multiple)</h6>
							<input type="file" name="myFile[]" id="myFile" multiple="multiple"><br/><br/>
						</div>
						<div class="submit-div">
							<button type="submit">Submit</button>
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
		$(".create-li svg").css("fill","#4977fc");
		$(".create-li span").css("color","#4977fc");
	});
</script>
</html>