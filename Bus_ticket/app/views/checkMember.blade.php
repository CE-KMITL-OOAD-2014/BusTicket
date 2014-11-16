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
    
    <div class="col-md-8 col-md-offset-1">


      ตรวจสอบการจอง  <br>


      
    </div>
  </div>

  <br>

  <center>           
   
    
    
    @if(isset($reserves))
    @foreach($reserves as $reserve)

    
    รหัสการจอง  &nbsp; {{$reserve->id}}  
    &nbsp; &nbsp; สถานะการชำระเงิน &nbsp; {{$reserve->status}}  
    &nbsp; &nbsp;  ต้นทาง &nbsp; {{$reserve->source}}   
    &nbsp; &nbsp;ปลายทาง &nbsp; {{$reserve->destination}} 
    &nbsp; &nbsp;   เวลาออก &nbsp;{{$reserve->timego}}  
    &nbsp; &nbsp; เวลาถึง &nbsp; {{$reserve->timeto}} 
    &nbsp; &nbsp; วันเ/เดือน/ปีที่จอง &nbsp;   {{$reserve->date}} 
    &nbsp; &nbsp; ราคา &nbsp;   {{$reserve->money}} 

    &nbsp; &nbsp;  จำนวนที่นั่งที่จอง &nbsp;  {{$reserve->seat}} 
    <br><br>
    
    
    @endforeach
    @endif
    <br><br><br>
    *หมาเหตุ สถานะการชำระเงิน 0 = ค้างชำระ 1=ชำระแล้ว

  </center>
  
  

</body>
</html>




@stop