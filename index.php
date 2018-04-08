<!DOCTYPE html>
<html>
<head>
	<title>Calculadora</title>
	<link rel="stylesheet" type="text/css" href="css/calculadora.css">
	
</head>
<body>

<form class="calculadora" method="post" name="calculo" action="">
	<input placeholder="Numero 1" 	type="text" id="texto" name="uno">
	<input	placeholder="Numero 2" type="text" id="texto" name="dos">
	<div class="especiales">
	<img id="marca" src="css/casio.png"><br><br>
		

		
	</div>
	<div class="numeros">

	<button type="submit" name="op" value="1"  id="divi">/</button>

		<button type="submit" name="op" value="2"  id="cero">x</button>
		<button type="submit" name="op" value="3" id="punto">+</button>
		<button type="submit" name="op" value="4"  id="mas_menos">-</button>
   	<div>
</form>


</body>
</html>
<?php 

		if (isset($_POST['op'])) {
				$n1 = $_POST['uno'];
				$n2 = $_POST['dos'];

				$opc=$_POST['op'];
				
				switch ($opc) {
					case 1:
						division($n1,$n2);
						break;
					case 2:
						multiplicacion($n1,$n2);
						break;
					case 3:
						suma($n1,$n2);
						break;
					case 4:
						resta($n1,$n2);
						break;
					
				}
						
				
		 	
		 } 

				
function division(&$n1,&$n2){
	if ($n2 == 0|| $n1==0) {

		echo "<h3>No se pueden realiza divisiones con 0</h3>";
	}
	else{
		$total=$n1/$n2;
	echo "<h3>Resultado: $total</h3>";
	}
	
	
}
function suma(&$n1,&$n2){
	$total=$n1+$n2;
	echo "<h3>Resultado: $total</h3>";
}
function resta(&$n1,&$n2){
	$total=$n1-$n2;
	echo "<h3>Resultado: $total</h3>";
}
function multiplicacion(&$n1,&$n2){
	$total=$n1*$n2;
	echo "<h3>Resultado: $total</h3>";
}




 ?>

