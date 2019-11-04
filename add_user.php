<?php
include("config.php");

$userType = mysqli_real_escape_string($conn, $_POST['asm_type']);
$theKey = "EPS";
if($userType == "Student"){
	$userNm = mysqli_real_escape_string($conn, $_POST['stu_name']);
	$userPwd = mysqli_real_escape_string($conn, $_POST['stu_password']);
	$userEmail = mysqli_real_escape_string($conn, $_POST['stu_email']);
	$userStream = mysqli_real_escape_string($conn, $_POST['stu_stream']);
}else if($userType == "Expert"){
	$userNm = mysqli_real_escape_string($conn, $_POST['exp_name']);
	$userPwd = mysqli_real_escape_string($conn, $_POST['exp_password']);
	$userEmail = mysqli_real_escape_string($conn, $_POST['exp_email']);
	$userStream = mysqli_real_escape_string($conn, $_POST['exp_stream']);
}

$chkQuery = "SELECT * from asmuserinfo WHERE ASM_Email = '$userEmail' and ASM_Type = '$userType'";

$resultSel = mysqli_query($conn,$chkQuery);
if (mysqli_num_rows($resultSel)>0) {

}
else{
	$midStr = substr($userNm,0,1).substr($userEmail,0,1).substr($userStream,0,1);
	$randomID = rand(100,100000);
	$userID = $userType."_".$midStr.$randomID;
	$userPhn = "1";
	$userCreation = date("d-m-Y");
	//echo $userCreation;
	//die;
	$insertQry = "INSERT INTO asmuserinfo (ASM_UserID, ASM_Name, ASM_Email, ASM_Pwd, ASM_Stream, ASM_Type, ASM_PhoneNum, ASM_CreationDate) VALUES ('$userID', '$userNm', '$userEmail', '$userPwd', '$userStream', '$userType', '$userPhn', STR_TO_DATE('$userCreation', '%d/%m/%Y'))";

	if (mysqli_query($conn, $insertQry)) {
    	//echo "New record created successfully";
    	if (isset($_SESSION["ASMUser"])) {
			//
		}else{
			session_start();
			$_SESSION["ASMUser"] = $userNm;
			//echo "Session variables are set.";
			$theStrArr = explode(" ", $userNm);
			$theStr = $theStrArr[0];
			$thesecret = openssl_encrypt($theStr,"AES-128-ECB",$theKey);

			$theStrArr1 = explode(" ", $userID);
			$theStr1 = $theStrArr1[0];
			$thesecret1 = openssl_encrypt($theStr1,"AES-128-ECB",$theKey);

			if($userType == "Student"){
				header("Location: http://localhost/ASM_Web/student_dashboard.php?asmu=".$thesecret."&asmi=".$thesecret1);
			}else if($userType == "Expert"){
				header("Location: http://localhost/ASM_Web/experts_dashboard.php?asmu=".$thesecret."&asmi=".$thesecret1);
			}
		}
	} else {
    	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}


	
}

?>