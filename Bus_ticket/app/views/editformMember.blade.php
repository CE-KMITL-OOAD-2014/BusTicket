<!DOCTYPE html>
<html lang="en">
@extends('headl')
@section('content')

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

        <form name="form1" method="post" action="/willEditPassword">

          Edit  <br>

          <table width="400" border="1" style="width: 400px">

            <tbody>



              <tr>

                <td> &nbsp;Password</td>
                
                <td><input name="password" type="password" id="txtPassword">

                </td>
                <td> <a href="#"><button type="submit" class="btn btn-default">แก้ไข password</button></a> </td>

              </tr>

            </form>

            <form name="form2" method="post" action="/willEditTelephone">
              <tr>

                <td> &nbsp;Phone Number</td>

                <td><input name="phonenum" name="text_plain" onKeyUp="if(isNaN(this.value)){ alert('กรุณากรอกตัวเลข'); this.value='';}"/>

                </td>

                <td><a href="#"><button type="submit" class="btn btn-default">แก้ไข Telephone</button></a></td>
              </tr>



               </form>



            <form name="form3" method="post" action="/willEditName">
              <tr>

                <td> &nbsp;Name</td>

                <td><input name="name" name="text_plain" />

                </td>

                <td><a href="#"><button type="submit" class="btn btn-default">แก้ไข Name</button></a></td>
              </tr>



               </form>





            </tbody>

          </table>

          <br>

        </div>
          <center> <?php           // if(Auth::User())
             $user = Auth::User();

       

   
          echo" $user->name  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  $user->username $user->tel  <br>\n";
      
       

  ?></center>

     

      
    </body>
  </html>
@stop