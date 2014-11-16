 <!DOCTYPE html> 
 @extends('header')
@section('content')

<html lang="en">
 
  <body>



<div class="container">
  
  <div class="text-center">
     
    
  </div>
  
</div><!-- /.container -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
<br><br><br><br><br><br>


  <!-- Optional: clear the XS cols if their content doesn't match in height -->
  <center> <?php           // if(Auth::User())
       $paths = Path::all();

       foreach($paths as $path){

   
echo "  ต้นทาง&nbsp;$path->source   &nbsp; &nbsp; &nbsp; ปลายทาง&nbsp;  $path->destination &nbsp; &nbsp; เวลาออกรถ&nbsp; $path->timego  &nbsp; &nbsp;เวลาถึง&nbsp; $path->timeto &nbsp; &nbsp;ราคา&nbsp; $path->money &nbsp; &nbsp;จำนวนที่นั่งสูงสุด&nbsp;$path->maxseat<br>\n";
           	
       }

  ?></center>


   

<br></br>
<br></br>
    
    
  </body>
</html>
@stop

