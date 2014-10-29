<?php
include("config.php");
session_start();
?>

<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>เแก้ไขข้อมูล</title>

  <?php
 
if($_POST){

	$ss=  $_SESSION["user"];
	$passwordinput = $_POST['password'];
	$usernameinput = $_POST['user'];
	$phonenuminput = $_POST['phonenum'];
    $confirminput = $_POST['confirmpassword'];
   
     
$sql="UPDATE  member SET password='$passwordinput',phonenum='$phonenuminput' WHERE `user_member`='$usernameinput'";
$sql_query=mysql_query($sql);


if($sql_query){

	echo"แก้ไขข้อมูลสำเร็จ";
}
else{

	echo"แก้ไม่ได้";
}
}

  ?>