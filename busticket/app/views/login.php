<?php
session_start();
?>

<html>

<head>
<title>log In</title>
</head>

<body>
<form name="form1" method="post" action="#">

<?php

 echo "Username             : <input type='text' name='txtUsername' placeholder='Username'><br>";
  echo "Password         :<input type='password' name='txtPassword' placeholder='Password'><br> ";
?>

<br>


  <input type="submit" name="Submit" value="Login">
</form>
</body>
</html>