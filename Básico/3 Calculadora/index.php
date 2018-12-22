<!--
*   Data: 21/12/2018
*   Autor: Thelsandro Costa Antunes
*   Técnico em Redes de Computadores - CETAM
*   Cursando Engenharia de Computação - UEA
*   Calculadora utilizando o método POST
*   2ª Versão
-->

<!DOCTYPE html>
<html lang="en" >

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Calculadora</title>
<link href="style.css" rel="stylesheet" type="text/css">

</head>
<script>
var numberOne;
var numberTwo;
var result;

document.getElementById("increase").onclick=increase;

function increase (){
  numberOne=parseInt(document.getElementById("no1").value);
  numberTwo=parseInt(document.getElementById("no2").value);
  result= document.getElementById("result").innerHTML="";
  result = numberOne + numberTwo;
  document.getElementById("result").innerHTML += numberOne + " + " + numberTwo + " = " + result;
}

document.getElementById("decrease").onclick=decrease;

function decrease (){
  numberOne=parseInt(document.getElementById("no1").value);
  numberTwo=parseInt(document.getElementById("no2").value);
  result= document.getElementById("result").innerHTML="";
  result = numberOne - numberTwo;
  document.getElementById("result").innerHTML += numberOne + " - " + numberTwo + " = " + result;
}

document.getElementById("multiply").onclick=multiply;

function multiply (){
  numberOne=parseInt(document.getElementById("no1").value);
  numberTwo=parseInt(document.getElementById("no2").value);
  result= document.getElementById("result").innerHTML="";
  result = numberOne * numberTwo;
  document.getElementById("result").innerHTML += numberOne + " x " + numberTwo + " = " + result;
}

document.getElementById("devide").onclick=devide;

function devide (){
  numberOne=parseInt(document.getElementById("no1").value);
  numberTwo=parseInt(document.getElementById("no2").value);
  let result= document.getElementById("result").innerHTML="";
  result = numberOne / numberTwo;
  document.getElementById("result").innerHTML += numberOne + " / " + numberTwo + " = " + result;
}
</script>

<body>

	<div class="container">
		<div class="box">
			<div><h4 align=center>PHP Calculadora</h4></div>

			<form action="" method="post" >
				Primeiro Numero: <input name="num1" type="text"><br>
				<br>
				Segundo Numero: <input name="num2" type="text"><br>

				<br>
				<input type="submit" name="operacao" value="+">
				<input type="submit" name="operacao" value="-">
				<input type="submit" name="operacao" value="*">
				<input type="submit" name="operacao" value="/">
			</form>

			<?php

				if(isset($_POST['num1']) && isset($_POST['num2']) && isset($_POST['operacao']))
				{
					$a = $_POST['num1'];
					$b = $_POST['num2'];
					$op= $_POST['operacao'];

					if(!empty($op))
					{
						if($op == '+')	$c = $a + $b;
						else if($op == '-')	$c = $a - $b;
						else if($op == '*')	$c = $a*$b;
						else $c = $a/$b;
			?>
			<br><br>
			<?php

			?>
			<?php
						echo "<b>RESULTADO: $c <br>";
					}
				}
			?>


		</div>
	</div>
</body>

</html>
