<?php
	$operador1 = $_POST['operador1'];
	$operador2 = $_POST['operador2'];
	$operacion = $_POST['operacion'];
	if(empty($operador1) || empty($operador2)){
		echo "Falta un dato";
	} else{
		if($operacion == 1){
			echo "Resultado: = " . ($operador1 + $operador2);
		}
		if($operacion == 2){
			echo "Resultado = " . ($operador1 - $operador2);
		}
		if($operacion == 3){
			echo "Resultado = " . ($operador1 * $operador2);
		}
		if($operacion == 4){
			echo "Resultado = " . ($operador1 / $operador2);
		}
		if($operacion == 5){
			echo "Resultado = " . ($operador1 % $operador2);
		}
	}
?>