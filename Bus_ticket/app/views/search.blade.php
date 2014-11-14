<!DOCTYPE html>
@extends('header')
@section('content')





<br><br><br><br><br>
<div class="container">
  <div class="col-md-8 col-md-offset-3" style="margin-left:1000;">

    <form action="">
     <div class="col-md-5 col-md-offset-2">
     <input type="text" class="form-control" name="search" required="" autofocus="" placeholder="ต้นทาง"><br>
    </div>
    <div class="col-md-5 col-md-offset-2">
      <input type="text" class="form-control" name="des" required="" autofocus="" placeholder="ปลายทาง"><br>
    </div>


    <div class="col-md-5 col-md-offset-2">
      วันที่ออกเดินทาง:
      <input type="date" name="bday"  required="" autofocus="" >
      <br><br>
      <button type="submit" class="btn btn-default">ค้นหา</button>
    </div>
  </form>
</div>
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<br></br>
<br></br>




@stop