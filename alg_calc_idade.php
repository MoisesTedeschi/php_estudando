<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Estrutura ElseIF</title>
	</head>

	<body>
		
		<?php 
			if(isset($_POST['idade'])){
				$idade = $_POST['idade'];
				
				if($idade < 18){
					echo "A idade é de um adolescente.<br />A idade informada foi: ".$idade;
					
				}elseif ($idade >= 18 and $idade < 60){
					echo "A idade é de uma pessoa adulta.<br />A idade informada foi: ".$idade;
					
				}else{
					echo "A idade é de uma pessoa idosa.<br />A idade informada foi: ".$idade;
				}
			}

		
		?>
		<form method="POST">
			
			<input type="text" name="idade" />
			<input type="submit" />
						
		</form>
	
	</body>
</html>