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


        ตรวจสอบการจอง  <br>


      
 </div>
</div>

    <br>

    <center>           
       
          
        
    @if(isset($reserves))
        @foreach($reserves as $reserve)

   
          {{$reserve->id}}  
          {{$reserve->status}}  
          {{$reserve->source}}  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  
          {{$reserve->destination}} 
          {{$reserve->timego}}  
          {{$reserve->timeto}} 
            {{$reserve->date}} 
            {{$reserve->money}} 

            {{$reserve->seat}} 
          <br>
          
       
       @endforeach
    @endif

  </center>
    
 

</body>
</html>

  


@stop