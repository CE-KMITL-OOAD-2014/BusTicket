<!DOCTYPE html>
<html lang="en">
@extends('header')

@stop
  <title>แก้ไขข้อมูลส่วนตัว</title>

 
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

        <form name="form1" method="post" action="/laravel/public/willEditPassword">

          Edit Form <br>

          <table width="400" border="1" style="width: 400px">

            <tbody>



              <tr>

                <td> &nbsp;Password</td>
                
                <td><input name="password" type="password" id="txtPassword">

                </td>
                <td> <a href="#"><button type="submit" class="btn btn-default">แก้ไข password</button></a> </td>

              </tr>

            </form>

            <form name="form2" method="post" action="/laravel/public/willEditTelephone">
              <tr>

                <td> &nbsp;Phone Number</td>

                <td><input name="phonenum" name="text_plain" onKeyUp="if(isNaN(this.value)){ alert('กรุณากรอกตัวเลข'); this.value='';}"/>

                </td>

                <td><a href="#"><button type="submit" class="btn btn-default">แก้ไข Telephone</button></a></td>
              </tr>


            </tbody>

          </table>

          <br>

        </div>


      </form>

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
