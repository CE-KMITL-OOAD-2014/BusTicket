  <!DOCTYPE html>
  <html lang="en">
  @extends('headl')
  @section('content')


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





        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
        <br></br>
        <br></br>
        <div class="row">

          <div class="col-md-8 col-md-offset-4">

            <!--<form name="form1" method="post" action="/laravel/public/addPath_hide"> -->

            เลือกตั๋วเที่ยวขาไป<br>



            <br><br>

            @if(isset($trips)) 


            @foreach($trips as $trip)

            <div class="row">
             <div class="col-xs-12 col-sm-6 col-md-8">
               ต้นทาง &nbsp;{{$trip->source}} &nbsp; &nbsp; &nbsp;  
               ปลายทาง &nbsp;{{$trip->destination}} &nbsp; &nbsp; &nbsp;  
               เวลาออก &nbsp;{{$trip->timego}} &nbsp; &nbsp; &nbsp;  
               เวลาถึง &nbsp;{{$trip->timeto}} &nbsp; &nbsp; &nbsp; 
               ราคา/ที่&nbsp;{{$trip->money}} 
             </div>
             <form action="/reservation" method="post">
               <div class="col-xs-12 col-sm-6 col-md-8">
                <select name="seat"class="form-control">
                  <option value=1>1</option>
                  <option value=2>2</option>
                  <option value=3>3</option>
                  <option value=4>4</option>
                  <option value=5>5</option>
                  <option value=6>6</option>
                  <option value=7>7</option>
                  <option value=8>8</option>
                  <option value=9>9</option>
                  <option value=10>10</option>
                </select>


                <div class="col-md-5 col-md-offset-2">
                 <br><br> วันที่ออกเดินทาง:
                  <input type="date" name="bday">
                  <br><br>

                </div>

                <input type="submit" value="ยืนยัน">
                <input type="hidden" name="id" value={{$trip->id}}>   


              </form>
              <!-- <a href="#"><button type="submit" class="btn btn-default">ยืนยัน</button> </a> -->
              <br><br>     
            </div>
          </div>



          @endforeach




          @endif









          <br>
          <!--</form> -->
        </div>

      </div>
      <div class="row">








      </div>

    </body>
    </html>
    @stop