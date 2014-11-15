<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Log in</title>

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
    <!--login modal-->
    <br></br>
<div id="loginModal" class="modal show" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
  <div class="modal-content">
      <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h1 class="text-center">Login</h1>
      </div>
      <div class="modal-body">


          <form action = '/laravel/public/tryLogin' class="form col-md-12 center-block" method="post">
            <div class="form-group">
              <input type="text" class="form-control input-lg" name="txtUsername" placeholder="username" required="" autofocus="">
            </div>
            <div class="form-group">
              <input type="password" class="form-control input-lg" name="txtPassword" placeholder="Password" required="" autofocus="">
            </div>
            <div class="form-group">
              
              <input class="btn btn-primary btn-lg btn-block" type ='submit' value='Log In'>
              <span class="pull-right"><a href="index">กลับหน้าหลัก</a></span>
            </div>
          </form>


      </div>
      <div class="modal-footer">
          <div class="col-md-12">
          
      </div>  
      </div>
  </div>
  </div>
</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
 
 
    
    <div class="row">
  <div class="col-md-4 "></div>
  <div class="col-md-4"></div>
  <div class="col-md-4"></div>
  <img src="11.jpg" width="400" height="500">
  <img src="11.jpg" width="400" height="500">
  <img src="11.jpg" width="400" height="500">
</div>
      
      
      
      
    
  

  </body>
</html>