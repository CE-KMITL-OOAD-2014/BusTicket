<!DOCTYPE html>

<html lang="en">
@extends('headl')
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
      
      <form name="form1" method="post" action="/cancelBook">

        ยกเลิกการจอง <br>

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
        <button type="submit" class="btn btn-default">ยกเลิก</button>



      
 </div>
</div>

    </form><br>

    <center>           
       
          
      

  </center>
    
 

</body>
</html>

  


@stop