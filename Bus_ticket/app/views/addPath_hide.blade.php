<!DOCTYPE html>
<html lang="en">
@extends('head')

@stop
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
    <title>เพิ่มเส้นทาง</title>


    <body>




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

          <form name="form1" method="post" action="/laravel/public/addPath_hide">

            เพิ่มเส้นทางการเดินทาง <br>

            <table width="400" border="1" style="width: 400px">

              <tbody>



                <tr>

                  <td> &nbsp;ต้นทาง</td>

                  <td><input name="source" type="text" required="" autofocus="" >

                  </td>

                </tr>

                <tr>

                  <td> &nbsp;ปลายทาง</td>

                  <td><input name="des" type="text" required="" autofocus="" >

                  </td>

                </tr>
                <tr>

                  <td> &nbsp;เวลาออก</td>

                  <td><input name="timego" type="text" required="" autofocus="">

                  </td>

                </tr>

                <tr>

                  <td> &nbsp;เวลาถึง</td>

                  <td><input name="timeto" type="text" required="" autofocus="">

                  </td>

                </tr>

                <tr>

                  <td> &nbsp;ราคา</td>

                  <td><input name="money" type="number" required="" autofocus="">

                  </td>

                </tr>


              </tbody>

            </table>

            <br>

          </div>
          <div class="row">
           <div class="col-md-8 col-md-offset-5">
            <a href="#"><button type="submit" class="btn btn-default">เพิ่มเส้นทาง</button></a>
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



      </div>
    </div>

  </body>
  </html>