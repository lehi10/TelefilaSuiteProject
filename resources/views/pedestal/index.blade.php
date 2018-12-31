<!DOCTYPE html>
<html lang="en">
<head>
  <title>Inicio</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <style>

	.center {
		margin-top : 50px;
	  text-align: center;

	}
	
	.inputsize {
		width: 350px;
		text-align: center;
		font-size:35px;
	}
	
	.buttonstyle {
	    width: 150px;
		text-align: center;
		font-size:30px;
	}
	
	.dangerstyle {
		text-align: center;
		font-size:30px;
	}

	.buttonCloseStyle{
		width: 100px;
		text-align: center;
		font-size:25px;
	}
		
	body {
		background-color: #f3f3f3;
	}
	
	.buttonNumberStyle {
		width: 	110px;
		height: 110px;
		text-align: center;
		font-size:30px;
	}
	
	/* ------- NUMERO 1 --------- */
	.img1{
		background: url("/images/numericKeyboard/1.png");
    	background-size: 100% 100%;

	}
	
	.img1:active {
		background: url("/images/numericKeyboard/1_.png");
    	background-size: 100% 100%;
	}

	/* ------- NUMERO 2 --------- */
	.img2{
		background: url("/images/numericKeyboard/2.png");
    	background-size: 100% 100%;

	}
	
	.img2:active {
		background: url("/images/numericKeyboard/2_.png");
    	background-size: 100% 100%;
	}
	
	/* ------- NUMERO 3 --------- */
	.img3{
		background: url("/images/numericKeyboard/3.png");
    	background-size: 100% 100%;

	}
	
	.img3:active {
		background: url("/images/numericKeyboard/3_.png");
    	background-size: 100% 100%;
	}
	
	/* ------- NUMERO 4 --------- */
	.img4{
		background: url("/images/numericKeyboard/4.png");
    	background-size: 100% 100%;

	}
	
	.img4:active {
		background: url("/images/numericKeyboard/4_.png");
    	background-size: 100% 100%;
	}
	
	/* ------- NUMERO 5 --------- */
	.img5{
		background: url("/images/numericKeyboard/5.png");
    	background-size: 100% 100%;
	}
	
	.img5:active {
		background: url("/images/numericKeyboard/5_.png");
    	background-size: 100% 100%;
	}
	
	
	/* ------- NUMERO 6 --------- */
	.img6{
		background: url("/images/numericKeyboard/6.png");
    	background-size: 100% 100%;
	}
	
	.img6:active {
		background: url("/images/numericKeyboard/6_.png");
    	background-size: 100% 100%;
	}
	
	
	/* ------- NUMERO 7 --------- */
	.img7{
		background: url("/images/numericKeyboard/7.png");
    	background-size: 100% 100%;
	}
	
	.img7:active {
		background: url("/images/numericKeyboard/7_.png");
    	background-size: 100% 100%;
	}
	
	
	/* ------- NUMERO 8 --------- */
	.img8{
		background: url("/images/numericKeyboard/8.png");
    	background-size: 100% 100%;
	}
	
	.img8:active {
		background: url("/images/numericKeyboard/8_.png");
    	background-size: 100% 100%;
	}
	
	
	/* ------- NUMERO 9 --------- */
	.img9{
		background: url("/images/numericKeyboard/9.png");
    	background-size: 100% 100%;
	}
	
	.img9:active {
		background: url("/images/numericKeyboard/9_.png");
    	background-size: 100% 100%;
	}
	
	
	/* ------- NUMERO 0 --------- */
	.img0{
		background: url("/images/numericKeyboard/0.png");
    	background-size: 100% 100%;
	}
	
	.img0:active {
		background: url("/images/numericKeyboard/0_.png");
    	background-size: 100% 100%;
	}
	
	
	

  </style>
</head>
<body>

<div class="center">
	<img id="u103_img" src="/images/logo_alpha.png?crc=4209966205" alt="" width="212" height="53"/>
</div>
			<br>
	
<hr>

<div class="container">
	<div class="col-lg-1"></div>
	<div class="col-lg-6">
		<div class="row">
			<div class="col-sm-3" >
				<input class="img1 buttonNumberStyle" type="submit" value="" onclick="setTextInput(1)" >
			</div>
		
			<div class="col-sm-3" >
				<input class="img2 buttonNumberStyle" type="submit" value="" onclick="setTextInput(2)">
			</div>
		
			<div class="col-sm-3" >
				<input class="img3 buttonNumberStyle" type="submit" value="" onclick="setTextInput(3)">
			</div>
		
		</div>
		<div class="row">
			<div class="col-sm-3" >
				<input class="img4 buttonNumberStyle" type="submit" value="" onclick="setTextInput(4)">
			</div>
		
			<div class="col-sm-3" >
				<input class="img5 buttonNumberStyle" type="submit" value="" onclick="setTextInput(5)">
			</div>
		
			<div class="col-sm-3" >
				<input class="img6 buttonNumberStyle" type="submit" value="" onclick="setTextInput(6)">
			</div>
		

		</div>
		<div class="row">
			<div class="col-sm-3" >
				<input class="img7 buttonNumberStyle" type="submit" value="" onclick="setTextInput(7)">
			</div>
		
			<div class="col-sm-3" >
				<input class="img8 buttonNumberStyle" type="submit" value="" onclick="setTextInput(8)">
			</div>
		
			<div class="col-sm-3" >
				<input class="img9 buttonNumberStyle" type="submit" value="" onclick="setTextInput(9)">
			</div>
		
		</div>
	
		<div class="row">
			<div class="col-sm-3" >
				<input class="img buttonNumberStyle" type="submit" value="Del" onclick="delInput()">
			</div>
		
			<div class="col-sm-3" >
				<input class="img0 buttonNumberStyle" type="submit" value="" onclick="setTextInput(0)">
			</div>
		
			<div class="col-sm-3" >
				<input class="img buttonNumberStyle" type="submit" value="Clear" onclick="clearInput()">
			</div>
		
		</div>

	</div>

	<div class="col-sm-4">
		
		<div class="center">
			
			<h1><strong>Ingrese su número de DNI</strong></h1>
			<br>
			<form action="/pedestal/{{$codigo}}/especialidad" method="post" enctype="multipart/form-data">
			  {{csrf_field()}}
				<div class="form-group">
					<input  id="inputDNI" class="inputsize" name="dni" tabindex="1">	
					<input  class="form-control" type="hidden" name="hospital_id" value={{$hospital_id}}>
				</div>
				<br>    
				<button type="submit" class="buttonstyle">Entrar</button>
			</form>
	
	
			<div id="myModal" class="modal fade" role="dialog">
				<div class="modal-dialog">
					<!-- Modal content-->
					<div class="modal-content">
						<div class="modal-header"></div>
						<div class="modal-body">
							<div class="dangerstyle" style="color:#ff5959;" id="u184-4">
								<p>{{session('message')}}</p>
						   	</div>
						</div>
						<div class="modal-footer">
							<center><button type="button" class="buttonCloseStyle" data-dismiss="modal">Cerrar</button></center>
						</div>
					</div>
				</div>
			</div>
	</div>
	<div class="col-lg-1"></div>
</div>

	
	@if(session('message'))
		<script>
       	$('#myModal').modal('show');
   		</script>    
	@endif

</body>

<script>
function setTextInput(number) {
	if(document.getElementById("inputDNI").value.length <= 8 )
		document.getElementById("inputDNI").value += number;
}

function delInput() {
	var number = document.getElementById("inputDNI").value;
	if(number.length>0)
	{
		var newNumber = number.substr(0, number.length-1);
		document.getElementById("inputDNI").value = newNumber;
	}	
}

function clearInput() {
	document.getElementById("inputDNI").value ="";
}
</script>

</html>

