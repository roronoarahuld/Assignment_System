<?php
$getStr = $_GET["asmu"];
$getStr2 = $_GET["asmi"];
$strUser = openssl_decrypt($getStr,"AES-128-ECB","EPS");
$strID = openssl_decrypt($getStr2,"AES-128-ECB","EPS");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width" initial-scale=1>
	<title>Engineering Projects - Expert Dashboard</title>
	<link rel="stylesheet" type="text/css" href="css\all.css">
	<link rel="stylesheet" type="text/css" href="css\style.css"/>
</head>
<body>
	<section id="expert-dashboard">
		<!-- Sidebar Menu -->
		<div class="sidebar" id="menu-nav">
			<script type="text/javascript" src="js\sidebar-expert.js"></script>
		</div>
		<div class="content-panel">
			<!-- Notifications Panel -->
			<div class="notification-bar" id="notify-corner">
				<script type="text/javascript" src="js\notifications.js"></script>
				
			</div>
			<div class="content-area">
				<div class="content-row">
					<div class="left-panel-cont">
						<h4>Welcome</h4>
						<h3><?php echo $strUser; ?></h3>
						<a href="javascript:void">Go to settings</a>
					</div>
					<div class="right-panel-cont">
						<div class="submitted-assignment">
							<span>Submitted Assignment</span>
							<div class="list-assign">
								<div class="list-div">
									<span class="file-img"><i class="far fa-file-alt"></i></span>
									<span class="file-title">
										<a href="submitted-exp-assignment.php">Subject 1</a>
									</span>
									<span class="file-date">
										Date Created<br/>
										19-07-18
									</span>
								</div>
								<div class="list-div">
									<span class="file-img"><i class="far fa-file-alt"></i></span>
									<span class="file-title">
										<a href="submitted-exp-assignment.php">Subject 1</a>
									</span>
									<span class="file-date">
										Date Created<br/>
										19-07-18
									</span>
								</div>
								<div class="list-div">
									<span class="file-img"><i class="far fa-file-alt"></i></span>
									<span class="file-title">
										<a href="submitted-exp-assignment.php">Subject 1</a>
									</span>
									<span class="file-date">
										Date Created<br/>
										19-07-18
									</span>
								</div>
							</div>
							<a href="submitted-exp-assignment-list.php">See More</a>
						</div>
					</div>
				</div>
				<div class="content-row">
					<div class="left-panel-cont">
						<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
						 viewBox="0 0 365.624 365.624" style="enable-background:new 0 0 365.624 365.624;" xml:space="preserve">
							<path d="M85.063,86.627V66.679c0-8.151,6.714-14.731,17.554-17.151C114.042,20.557,142.145,0,175.126,0
								c32.939,0,61.198,20.501,72.652,49.414c11.144,2.321,18.285,8.982,18.285,17.265v19.948c0,7.981-6.636,14.4-17.09,16.938
								c-7.745,22.485-25.535,40.518-48.729,48.359c-2.073,6.602-8.249,11.29-15.525,11.29h-19.217c-8.971,0-16.27-7.03-16.27-16.001
								c0-8.97,7.299-15.999,16.27-15.999h19.217c3.988,0,7.646,1.289,10.478,3.678c23.82-8.396,40-31.077,40-56.804
								c0-24.956-15.295-46.408-37.002-55.476c-10.631,19.366-27.81,33.509-47.567,39.035c-4.783,1.345-9.751-1.455-11.091-6.242
								c-1.339-4.787,1.459-9.753,6.245-11.092c13.652-3.819,25.78-13.176,34.12-26.124c-1.578-0.125-3.164-0.188-4.773-0.188
								c-33.132,0-60.066,26.955-60.066,60.087v17.224c0,2.645-1.094,5.155-3.111,6.865c-2.016,1.71-4.611,2.447-7.224,2.014
								C92.674,102.189,85.063,95.296,85.063,86.627z M167.203,84.213c0-4.971-4.029-9-9-9h-10.001c-4.971,0-9,4.029-9,9s4.029,9,9,9
								h10.001C163.173,93.213,167.203,89.184,167.203,84.213z M283.434,272.213h-72.078c-4.971,0-9,4.029-9,9s4.029,9,9,9h72.079
								l-0.93,0.969c-3.558,3.472-3.628,9.201-0.157,12.759c1.765,1.808,4.103,2.73,6.443,2.73c2.266,0,4.534-0.843,6.284-2.55
								l16.638-16.229c0.094-0.088,0.186-0.176,0.275-0.269c1.056-1.082,1.784-2.36,2.187-3.716c0.001-0.005,0.003-0.01,0.004-0.015
								c0.193-0.652,0.079-1.337,0.118-2.043c0.001-0.009-0.234-0.016-0.234-0.024c0-0.006,0-0.01,0-0.016c0-0.004,0-0.007,0-0.01
								c0-0.163,0.249-0.327,0.248-0.49c-0.004-1.214-0.13-2.371-0.569-3.427c-0.389-0.938-0.884-1.822-1.605-2.611
								c-0.002-0.002,0.026-0.004,0.024-0.006s0.103-0.004,0.101-0.006c-0.097-0.106-0.198-0.21-0.198-0.312c0,0,0-0.001,0-0.002
								c0-0.005-0.1-0.01-0.104-0.015c-0.004-0.004-0.053-0.008-0.058-0.013c-0.001-0.001-0.024-0.002-0.026-0.004
								c-0.046-0.045-0.103-0.09-0.15-0.133l-16.643-16.233c-3.558-3.473-9.26-3.402-12.729,0.156c-3.472,3.558-3.403,9.193,0.155,12.664
								L283.434,272.213z M305.547,331.213h-72.079l0.929-0.874c3.558-3.472,3.628-9.154,0.157-12.712c-3.473-3.557-9.17-3.62-12.728-0.149
								l-16.612,16.212c-0.103,0.096-0.203,0.196-0.303,0.298c-0.943,0.968-1.771,2.094-2.192,3.29c-0.331,0.938-0.656,1.947-0.656,2.998
								c0,0.026,0,0.052,0,0.078c0,0.001,0,0.002,0,0.003c0,0.006,0,0.013,0,0.02c0,0.003,0,0.007,0,0.01c0,0.005,0,0.01,0,0.015
								s0,0.011,0,0.015c0,0.005,0,0.008,0,0.012c0,0.006,0,0.012,0,0.018c0,0.004,0,0.007,0,0.011c0,0.006,0,0.012,0,0.019
								c0,0.003,0,0.006,0,0.01c0,0.006,0,0.012,0,0.018c0,0.004,0,0.007,0,0.011c0,0.006,0,0.011,0,0.017c0,0.004,0,0.009,0,0.013
								s0,0.009,0,0.013c0,0.006,0,0.011,0,0.016c0,0.003,0,0.006,0,0.008c0,0.792,0.302,1.557,0.52,2.284
								c0.001,0.002,0.075,0.004,0.076,0.006c0.001,0.003,0.039,0.006,0.04,0.01c0.403,1.343,1.147,2.612,2.194,3.686
								c0.1,0.102,0.209,0.2,0.312,0.296l16.617,16.208c1.75,1.707,4.021,2.558,6.286,2.558c2.341,0,4.681-0.907,6.445-2.715
								c3.471-3.558,3.401-9.287-0.157-12.759l-0.929-0.938h72.08c4.971,0,9-4.029,9-9S310.518,331.213,305.547,331.213z M192.499,93.213
								h10c4.971,0,9-4.029,9-9s-4.029-9-9-9h-10c-4.971,0-9,4.029-9,9S187.528,93.213,192.499,93.213z M212.038,204.005
								c20.401,1.608,39.704,14.452,43.356,29.476c1.173,4.829,6.037,7.794,10.871,6.619c4.83-1.174,7.793-5.852,6.619-10.682
								c-5.915-24.333-34.52-43.205-65.12-43.205h-1.237c-3.844,0-7.264,2.252-8.512,5.888c-2.12,6.173-10.586,12.327-22.665,12.327
								c-12.081,0-20.547-6.107-22.666-12.279c-1.249-3.637-4.668-5.936-8.513-5.936h-1.236c-30.601,0-59.206,18.872-65.122,43.205
								L51.388,338.021c-0.123,0.455-0.211,0.877-0.261,1.357c-0.126,1.181-0.015,2.322,0.302,3.415c0.205,0.716,0.498,1.586,0.864,2.216
								c0.001,0.002,0.002,0.204,0.004,0.204c0,0,0.001,0,0.002,0c1.188,2,3.175,3.413,5.653,4.015c0.715,0.174,1.429,0.123,2.133,0.123
								c0.101,0,0.199-0.138,0.299-0.138h53.992c4.971,0,9-4.029,9-9s-4.029-9-9-9H71.53l23.773-97.764
								c3.653-15.022,22.955-27.851,43.357-29.46c6.951,11.05,21.071,18.337,36.689,18.337
								C190.966,222.326,205.085,215.054,212.038,204.005z"/>
							<g>
							</g>
						</svg>
						<h4 class="help-h4">HELP</h4>
						<a href="javascript:void(0)">Something is troubling you ?</a>
					</div>
					<div class="right-panel-cont">
						<div class="pending-assignment">
							<span>Pending Assignments</span>
							<div class="list-assign">
								<div class="list-div">
									<span class="file-img"><i class="far fa-file-alt"></i></span>
									<span class="file-title">
										<a href="pending-exp-assignment.php">Subject 1</a>
									</span>
									<span class="file-date">
										Date Created<br/>
										19-07-18
									</span>
								</div>
								<div class="list-div">
									<span class="file-img"><i class="far fa-file-alt"></i></span>
									<span class="file-title">
										<a href="pending-exp-assignment.php">Subject 1</a>
									</span>
									<span class="file-date">
										Date Created<br/>
										19-07-18
									</span>
								</div>
								<div class="list-div">
									<span class="file-img"><i class="far fa-file-alt"></i></span>
									<span class="file-title">
										<a href="pending-exp-assignment.php">Subject 1</a>
									</span>
									<span class="file-date">
										Date Created<br/>
										19-07-18
									</span>
								</div>
							</div>
							<a href="pending-exp-assignment-list.php">See More</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</body>
<script type="text/javascript" src="js\jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="js\main.js"></script>
<script type="text/javascript">
    function mynameFunc(variable){
        var sName = document.getElementById(variable);
        sName.innerHTML = "<?php echo $strUser ?>"+" "+'<i class="fas fa-chevron-down"></i>';
        }   
    mynameFunc("stexp_id");
</script>
<script type="text/javascript">
	$(document).ready(function(){
		$(".dash-li svg").css("fill","#4977fc");
		$(".dash-li span").css("color","#4977fc");
	});
</script>
</html>