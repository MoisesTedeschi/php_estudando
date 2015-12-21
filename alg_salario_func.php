<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8" />
		<link rel="stylesheet" type="text/css" href="estilo.css" />
			
		
		<title>Código mínimo de php - 2</title>
	</head>
	<body>
		
		<h3>Entrada de dados de um Funcionário</h3>
			<?php
				if(isset($_POST["nome"])){
					echo "O nome cadastrado é: ".$_POST["nome"]."<br />";
					echo "Cargo: ".$_POST["cargo"]."<br />";
					echo "Salário: ".$_POST["salario"]."<br />";
					
					$sal = $_POST["salario"];
					
					if($sal <= 1800){
						echo "Você precisa de um aumento!";
					}else{
						echo "Seu salário é de: R$ ". number_format($sal,2)."<br />".$_POST["nome"].", seu salário considerável, mas pode ser melhor!";
					}
				}
			?>
		<div class="form1">	
			<form method="post">
				Nome do funcionário 
				<br />
				<input type="text" name="nome" />
				<br />
				
				Cargo
				<br />
				<input type="text" name="cargo" />
				<br />
				
				Salário
				<br />
				<input type="text" name="salario" />
				<br />
				
				<input type="submit" class="btn" value="Cadastrar"/>
				<input type="submit" class="btn" value="Limpar"/>
				 
				
			</form>	
		</div>
	</body>
</html>


