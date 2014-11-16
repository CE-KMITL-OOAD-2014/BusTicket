<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
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
		  <a class="navbar-brand" rel="home" href="/home"><span class="glyphicon glyphicon-home"></span></a>

  </div>
  
  <div class="collapse navbar-collapse">
    
   <ul class="nav navbar-nav">
   <li><a href="/laravel/public/howtoMember">วิธีจอง</a></li>
   
   <li><a href="/laravel/public/showPathMember">แสดงเส้นทาง</a></li>
   <li><a href="/laravel/public/searchMember">จองตั๋วรถ</a></li>

      <li><a href="/laravel/public/cancelBooking">ยกเลิกการจองตั๋วรถ</a></li>
      <li><a href="/checkMember">ตรวจสอบการจอง</a></li>
      <li><a href="/editformMember">แก้ไขข้อมูลสมาชิก</a></li>
    </ul>
    
    
		
     <div class="col-sm-3 col-md-1 pull-right">
     
     <form name="form" method="post" action="/laravel/public/logout">  
       <button type="submit" class="btn btn-default">log out</button>
       </form>
    
    </div>
	</div>

</div>
  @yield('content')
</body>
</html>