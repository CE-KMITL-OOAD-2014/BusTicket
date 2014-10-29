
<html>
<head>
 <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<title>แก้ไขข้อมูลส่วนตัว</title>
</head>
<body>
<form action="editmember.php" method="post">
  <?php
  
  


  echo "Username         : <input type='text' name='user' placeholder='Username'><br> ";	 
  echo "Telephone Number             : <input type='text' name='phonenum' placeholder='Telphone Number'><br>";
  echo "Password         :<input type='password' name='password' placeholder='Password'><br> ";
  echo "Comfirmpassword  : <input type='password' name='confirmpassword' placeholder='Confirmpassword'><br> ";
  

  ?>
  <br></br>
  <input type="submit"  value="แก้ไขข้อมูล" name="id">
 </form>
</html>