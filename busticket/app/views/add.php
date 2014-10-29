
<?php
include("config.php");
?>
 <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Addtrip</title>
 

	<?php
		$sourceinput = $_POST['source'];
	$desinput = $_POST['des'];
		$timegoinput = $_POST['timego'];
	$timetoinput = $_POST['timeto'];
    
	
	
	$sql_source="SELECT * FROM ``WHERE `` LIKE ''"; //ดึงข้อมูลมาทั้งหมด
	$result_source=mysql_query($sql_source);
	$num_source=mysql_num_rows($result_source);

	$sql_des="SELECT * FROM ``WHERE `` LIKE ''"; //ดึงข้อมูลมาทั้งหมด
	$result_des=mysql_query($sql_des);
	$num_dest=mysql_num_rows($result_des);

	if($num_dest>=1){ //เช็คว่าข้อมูลที่มีการค้นหามีหรือไม่
		echo"เส้นทางนี้มีการเพิ่มแล้ว<br>";
		

	}else if($_POST['dest']==""){

		echo"dรุณาใส่ปลายทาง";
		exit();
	}else if( $_POST['timego']==""){

		echo"กรุณาใส่เวลา";
		exit();
	}else if($_POST['timeto']==""){

		echo"กรุณาใส่เวลา";
		exit();
	}else if($_POST['username']==""){

		echo"กรุณาใส่ username";
		exit();
	}

	else{
	

	$sql_insert="INSERT INTO `$db_name`.`` (`source`, `dest`, `timego`,`timeto`) VALUES ('$sourceinput', '$desinput', '$timegoinput','$timetoinput');";

 	$sql_result=mysql_query($sql_insert);

 		echo"เพิ่มข้อมูลสำเร็จ";
	}
	

	?>
	<br></br>
	




	
