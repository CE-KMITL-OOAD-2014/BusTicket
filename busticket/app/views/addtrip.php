<html>
<head>
 <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Addtrip</title>
  </head>
<body>
<form action="add.php" method="post">
  <?php
  
  


  echo "ต้นทาง             : <input type='text' name='source' placeholder='Source'><br>";
  echo "ปลายทาง         : <input type='text' name='des' placeholder='Destination'><br> ";
  echo "เวลาออก             : <input type='text' name='timego' placeholder='เวลาออก'><br>";
  echo "เวลาถึง         :<input type='password' name='timeto' placeholder='เวลาถึง'><br> ";
  
  

  ?>
  <br></br>
  <input type="submit" name="addtrip" value="เพิ่มเส้นทาง">
 </form>

</body> 
</html>








