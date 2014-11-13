<!DOCTYPE html>

<html lang="en">
@extends('head')
@section('content')



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
      
      <form name="form1" method="post" action="#">

        ตรวจสอบการจอง <br>

        <table width="400" border="1" style="width: 400px">

          <tbody>



            <tr>

              <td> &nbsp;รหัสการจอง</td>

              <td><input name="id" type="int" id="id" name="text_plain" required="" autofocus="" onKeyUp="if(isNaN(this.value)){ alert('กรุณากรอกตัวเลข'); this.value='';}"/>

              </td>

            </tr>

            <tr>

              <td> &nbsp;Phone Number</td>

              <td><input name="phonenum" name="text_plain" required="" autofocus="" onKeyUp="if(isNaN(this.value)){ alert('กรุณากรอกตัวเลข'); this.value='';}"/>

              </td>

            </tr>




          </tbody>

        </table>

        <br>

      </div>
      <div class="row">
       <div class="col-md-8 col-md-offset-5">
        <a href="#"><button type="submit" class="btn btn-default">ตรวจสอบ</button></a>
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
@stop