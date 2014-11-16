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
      
      <form name="form1" method="post" action="/updateStatus">

        ปรับปรุงสถานะการจอง <br>

        <table width="400" border="1" style="width: 400px">

          <tbody>



            <tr>

              <td> &nbsp;รหัสการจอง</td>

              <td><input name="id" type="int" id="id" name="text_plain" required="" autofocus="" onKeyUp="if(isNaN(this.value)){ alert('กรุณากรอกตัวเลข'); this.value='';}"/>

              </td>

            </tr>



          </tbody>

  
        </table>

        <br>

      </div>
      <div class="row">
       <div class="col-md-8 col-md-offset-5">
        <button type="submit" class="btn btn-default">ปรับปรุง</button>
      
 </div>
</div>

    </form><br>

    <center> <?php           // if(Auth::User())
       $reserves = Reserve::all();

       foreach($reserves as $reserve){

   
          echo"รหัสการจอง &nbsp; $reserve->id &nbsp;&nbsp;สถานะการชำระ&nbsp;$reserve->status &nbsp;&nbsp;ชื่อผู้ใช้&nbsp;  $reserve->username&nbsp;&nbsp;ต้นทาง&nbsp;  $reserve->source   &nbsp; &nbsp; ปลายทาง&nbsp; $reserve->destination &nbsp;&nbsp;เวลาออก&nbsp; $reserve->timego &nbsp;&nbsp;เวลาถึง&nbsp; $reserve->timeto &nbsp;&nbsp; จำนวนที่นั่ง&nbsp;$reserve->seat  &nbsp; &nbsp;ราคา&nbsp;";
           echo $reserve->money*$reserve->seat; echo "<br>\n";
          
       }

  ?></center>
    
 

</body>
</html>

  


@stop