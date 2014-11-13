<!DOCTYPE html>
<html lang="en">
@extends('headl')

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
    <title>เลือกตั๋วเที่ยวขาไป</title>


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

            เลือกตั๋วเที่ยวขาไป<br>

            <table width="400" border="1" style="width: 400px">

              <tbody>

              <br><br>
      <?php 
          echo "$trip->source" ;
          echo "$trip->destination";


                ?>

                <div class="row">
                  <div class="col-xs-4 col-md-offset-1">


                    <select class="form-control">
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                      <option value="6">6</option>
                      <option value="7">7</option>
                      <option value="8">8</option>
                      <option value="9">9</option>
                      <option value="10">10</option>
                    </select>
                  </div>
                </div>


              </tbody>

            </table>

            <br>

          </div>
          <div class="row">
           <div class="col-md-8 col-md-offset-5">
            <a href="#"><button type="submit" class="btn btn-default">เพิ่มเส้นทาง</button></a>
          </div>
          <div class="row">
            <div class="col-md-4 col-md-offet-4"><img src="11.jpg" width="400" height="500"></div>
            <div class="col-md-4 col-md-offet-4"> <img src="11.jpg" width="400" height="500"></div>
            <div class="col-md-4 col-md-offet-4"><img src="11.jpg" width="400" height="500"></div>
            
           
            
          </div>



        </form>



      </div>
    </div>

  </body>
  </html>