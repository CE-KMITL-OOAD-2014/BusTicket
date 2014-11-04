<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Register</title>

  <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body>
  <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">

<div class="navbar-header">
  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
  <span class="sr-only">Toggle navigation</span>
  <span class="icon-bar"></span>
  <span class="icon-bar"></span>
  <span class="icon-bar"></span>
  </button>
  <a class="navbar-brand" rel="home" href="home.html"><span class="glyphicon glyphicon-home"></span></a>

</div>

<div class="collapse navbar-collapse">
  
  <ul class="nav navbar-nav">
    <li><a href="howto.html">วิธีจอง</a></li>
    <li><a href="bkk-cm.html">ค้นหาเที่ยวรถ</a></li>
    <li><a href="#">จองตั๋วรถ</a></li>
    <li><a href="check.html">ตรวจสอบการจอง</a></li>
    
  </ul>
  
  <div class="col-sm-3 col-md-3 pull-right">
     <a href="login.html"><button type="submit" class="btn btn-default">login</button></a>
     <a href="regis.html"><button type="submit" class="btn btn-default">register</button></a>
  
  </div>
  
</div>
</div>


<div class="container">

<div class="text-center">
  
  
</div>

</div><!-- /.container -->

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>
<br></br>
<br></br>
   <div class="row">
  
  <div class="col-md-8 col-md-offset-4">
    
      <form name="form1" method="post" action="">

Register Form <br>

<table width="400" border="1" style="width: 400px">

<tbody>

<tr>

<td width="125"> &nbsp;Username</td>

<td width="180">

<input name="txtUsername" type="text" id="txtUsername" size="20">

</td>

</tr>

<tr>

<td> &nbsp;Password</td>

<td><input name="txtPassword" type="password" id="txtPassword">

</td>

</tr>

<tr>

<td> &nbsp;Phone Number</td>

<td><input name="phonenum" name="text_plain" onKeyUp="if(isNaN(this.value)){ alert('กรุณากรอกตัวเลข'); this.value='';}"/>

</td>

</tr>

<tr>

<td> &nbsp;Confirm Password</td>

<td><input name="txtConPassword" type="password" id="txtConPassword">

</td>

</tr>

<tr>

<td>&nbsp;Name</td>

<td><input name="txtName" type="text" id="txtName" size="35"></td>

</tr>



</tbody>

</table>

<br>

</div>
<div class="row">
   <div class="col-md-8 col-md-offset-5">
 <a href="login.html"><button type="submit" class="btn btn-default">สมัครสมาชิก</button></a>
 </div>
  <div class="row">
<div class="col-md-4 "></div>
<div class="col-md-4"></div>
<div class="col-md-4"></div>
<img src="11.jpg" width="400" height="500">
<img src="11.jpg" width="400" height="500">
<img src="11.jpg" width="400" height="500">
</div>
    


</form>

 
    
    
    
 
  
</body>
</html>
