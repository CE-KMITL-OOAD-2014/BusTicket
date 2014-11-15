
<html>

@extends('header')
@section('content')

<body  >

<br><br><br> 

<div class="col-md-5 col-md-offset-4">
   <div class="row" style="background-color:white">
  
  
    
	 <form name="form1" method="post" action="/willRegister">

		Register Form <br>

		<table width="400" border="1" style="width: 400px">
		

		<tbody>

		<tr>

		<td>&nbsp;Name</td>

		<td><input name="name" type="text" id="txtName" size="35" required="" autofocus=""></td>

		</tr>
		
		<tr>

		<td width="125"> &nbsp;Username</td>

		<td width="180">

		<input name="username" type="text" id="txtUsername" size="20" required="" autofocus="">

		</td>

		</tr>

		<tr>

		<td> &nbsp;Password</td>

		<td><input name="password" type="password" id="txtPassword" required="" autofocus="">

		</td>

		</tr>



		<tr>

		<td> &nbsp;Phone Number</td>

		<td><input name="phonenum" name="text_plain" required="" autofocus="" onKeyUp="if(isNaN(this.value)){ alert('กรุณากรอกตัวเลข'); this.value='';}" />

		</td>

		</tr>


		</tbody>

		</table>

		<br>

 
   
	
		
		 <a href="login.html"><button type="submit" class="btn btn-default">สมัครสมาชิก</button></a>
			

   
		</div>


	</form>

</div>
</div>




</body> 
</html>
@stop   









