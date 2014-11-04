<?php
include("config.php");
session_start();
?>

 <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>เข้าระบบ</title>
 

	<?php
	if($_POST){

	$usernameinput = $_POST['txtUsername'];
	
	$passwordinput = $_POST['txtPassword'];
	 
	$SQL_LOGIN="SELECT * FROM `member` WHERE `user_member`='$usernameinput'";
	$RESULT_LOGIN=mysql_query($SQL_LOGIN);
	$NUM_USER=mysql_num_rows($RESULT_LOGIN);
	
	$SQL_PWD="SELECT * FROM `member` WHERE `user_member`='$usernameinput' AND `password`='$passwordinput'";
		$RESULT_PWD=mysql_query($SQL_PWD);
		$NUM_PWD=mysql_num_rows($RESULT_PWD);
		if($NUM_PWD==1)
		$strPasswdUser=mysql_result($RESULT_PWD, 0,	'password');

	
	
	if(!$NUM_USER||!$NUM_PWD){	
		
			echo"user or password ไม่ถูกต้อง! <br>";
		
	}
	else{
        $_SESSION["user"]=$usernameinput;
		echo"สวัสดี {$usernameinput} !<br>";
//<a href="edit.php">แก้ไขข้อมูลส่วนตัว</a>
	}	
	}	
	

	

	
	?>

	<br></br>
<a href="login.php">กลับไปที่หน้า login</a>
	<br></br>

	
