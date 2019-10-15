<?php
include("config.php");

$assTitle = $_POST["topic"];
$assDesc = $_POST["descp"];
$assAttach = $_POST["myFile"];

echo $assTitle." ".$assDesc." ";
print_r($assAttach);


/*-----------------------------------Below Code is for uploading file to server---------------------------------*/
$sFiles = array_filter($_FILES['myFile']['name']);
$fCount = count($sFiles);

echo "<br>";
echo $fCount;
echo "<br>";
if ($fCount > 0) {
	$stu_dir = "UserID";
	$ass_dir = $assTitle;
	$finalPath = "./data_asm/".$stu_dir."/".$ass_dir."/";
	if (file_exists("./data_asm/")) {
		
	}
	else{
		mkdir("data_asm");
		if (file_exists("./data_asm/".$stu_dir)) {
			
		}
		else{
			mkdir("./data_asm/".$stu_dir);
			if (file_exists($finalPath)) {
				
			}
			else{
				mkdir($finalPath);
			}
		}

	}
	
	for($i=0;$i<$fCount;$i++){
		$tmpFilePath = $_FILES['myFile']['tmp_name'][$i];

		if ($tmpFilePath != "") {
			$newFilePath = $finalPath.$_FILES['myFile']['name'][$i];
			if (move_uploaded_file($tmpFilePath, $newFilePath)) {
				echo "<br>";
				echo "Upload SuccessFull";
				echo "<br>";
			}
		}
	}
}
/*-------------------------------------------------------------------------------------------------------------*/

/*-------------------------------Below Code is for downloading file from server--------------------------------*/
/*$stu_dir_ser = "UserID";
$ass_dir_ser = $assTitle;
$finalPathSer = "./data_asm/".$stu_dir_ser."/".$ass_dir_ser."/";
$servFiles = scandir($finalPathSer);
$attZip = $ass_dir_ser.".zip";
$fZip = new ZipArchive();
$tmp_fnm = tempnam('.','');

if ($fZip -> open($attZip,ZipArchive::CREATE) === True) {
	$wDir = opendir($finalPathSer);
	while($file1 = readdir($wDir)){
		if (is_file($finalPathSer.$file1)) {
			$fZip -> addFile($finalPathSer.$file1,$file1);
		}
	}
}

$fZip->close();
if(headers_sent()){
	echo 'http header sent already';
}else{
	if(!is_file($attZip)){
		echo 'file not found';
	}else if(!is_readable($attZip)){
		echo 'file not readable';
	}else{
		header("Content-Type: application/zip");
header("Content-Disposition: attachment; filename=$attZip");
header("Content-Length: ".filesize($attZip)."\\n");
header("Pragma: no-cache");
header("Expires: 0");
readfile($attZip);
exit;
	}
}
*/

/*   --------------Extra Code for reference----------------------------
$fZip->open($tmp_fnm,ZipArchive::CREATE);

foreach ($servFiles as $sFile) {
	$download_file = file_get_contents($sFile);
	$fZip->addFromString(basename($sFile),$download_file);
}
-----------------------------------------------------------------------*/

/*-------------------------------------------------------------------------------------------------------------*/
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pay To Get Going</title>
</head>

<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_xclick">
<input type="hidden" name="business" value="santy1996@gmail.com">
<input type="hidden" name="lc" value="US">
<input type="hidden" name="amount" value="10.00">
<input type="hidden" name="currency_code" value="USD">
<input type="hidden" name="button_subtype" value="services">
<input type="hidden" name="no_note" value="0">
<input type="hidden" name="bn" value="PP-BuyNowBF:btn_paynowCC_LG.gif:NonHostedGuest">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_paynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>
</html>