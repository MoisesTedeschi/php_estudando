<!-- Algoritmo: Soma de dois números -->
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8" />
		<link rel="stylesheet" type="text/css" href="estilo.css" />
			
		
		<title>Código mínimo de php</title>
	</head>
	<body>
		
		<h3>Testando linguagem PHP</h3>
		<?php
			if(isset($_POST["valor1"])){
				
				$num1 = $_POST["valor1"];
				$num2 = $_POST["valor2"];
				
				$soma = $num1 + $num2; 
				echo "<br />Resultado da soma dos dois valores é: ". $soma;
			}
    
		?>
		
		<div class="form1">
			<form method="post">
				Primeiro valor: <input type="text" name="valor1"/>
				<br /><br />
				Segundo Valor: <input type="text" name="valor2"/>
				<br /><br />
				<input type="submit" value="Calcular"/>
				
			</form>
		</div>
	</body>
</html>


