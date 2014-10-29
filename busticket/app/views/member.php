
<?php
include("config.php");
?>
 <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>สมัครสมาชิก</title>
 

	<?php
		$usernameinput = $_POST['username'];
	$passwordinput = $_POST['password'];
		$nameinput = $_POST['name'];
	$phonenuminput = $_POST['phonenum'];
    $confirminput = $_POST['confirmpassword'];
	
	echo "Hi {$nameinput} !<br>";

	$sql_sel="SELECT * FROM `member`WHERE `user_member` LIKE '$usernameinput'"; //ดึงข้อมูลมาทั้งหมด
	$result_sql=mysql_query($sql_sel);
	$num_rows=mysql_num_rows($result_sql);

	$sql_pass="SELECT * FROM `member`WHERE `password` LIKE '$passwordinput'"; //ดึงข้อมูลมาทั้งหมด
	$result_pass=mysql_query($sql_pass);
	$num_pass=mysql_num_rows($result_pass);

	if($num_rows>=1){ //เช็คว่าข้อมูลที่มีการค้นหามีหรือไม่
		echo"usernameนี้มีคนใช้แล้ว<br>";
		

	}else if($_POST['password']==""){

		echo"กรุณาใส่ password";
		exit();
	}else if( $_POST['name']==""){

		echo"กรุณาใส่ชื่อ";
		exit();
	}else if($_POST['phonenum']==""){

		echo"กรุณาใส่หมายเลขโทรศัพท์";
		exit();
	}else if($_POST['username']==""){

		echo"กรุณาใส่ username";
		exit();
	}else if( $_POST['confirmpassword']!=$_POST['password']){

		echo"password ไม่ตรงกัน กรุณากรอกใหม่";
		exit();
	}

	else{
	

	$sql_insert="INSERT INTO `$db_name`.`member` (`name`, `user_member`, `password`,phonenum) VALUES ('$nameinput', '$usernameinput', '$passwordinput','$phonenuminput');";

 	$sql_result=mysql_query($sql_insert);
	}
	

	?>
	<br></br>
	<a href="register.php">กลับไปที่หน้าระบบสมัครสมาชิก</a>
<br></br>

<a href="login.php">เข้าสู่ระบบ</a>




	
