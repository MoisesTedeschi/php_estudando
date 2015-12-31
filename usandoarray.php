<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Estudando PHP - Trabalhando com Array</title>
		<meta charset="UTF-8" />
	</head>
	<body>
	
		<?php
		
			$letra = array("Oi");
			echo $letra [0][1]."<br />";
			
			//Indices implicitos - Automáticos.
			$animais = array("Gato","Cachorro","Macaco", "Cavalo");
			echo $animais[0]."<br />";
			echo $animais[1]."<br />";
			echo $animais[2]."<br />";
			echo $animais[3]."<br />";
			
			//Colocando indice manualmente - explicitos
			$nomePessoa = array(0=>"Pedro", 1=>"Bia", 5=>"Paula", 2=>"Ana", 3=>"Katia", 4=>"Eumesmo");
			echo $nomePessoa[4]."<br />";
			
			//Um array dentro de um outro array - como acessar
			$nomePessoa2 = array(
							0=>array(0=>"Julia"));
							
			echo $nomePessoa2[0][0]."<br /><br />";	
			
			//Usando um array associativo
			
			$config = array();
			$config["nome"] = "Chora Cavaco NEWs";
			$config["linguagem"] = "PHP";
			$config["site"] = "http://www.choracavaconews.com.br";
			
			echo $config["nome"]." - Acesse: ".$config["site"]."<br /><br />";
			
			//Essa função exibe com mais detalhes o que tem no array
			var_dump($config);
			
			echo "<br /><br />";
			
			//Função exibe de forma mais resumida o conteúdo de um array
			print_r($config);
			
			echo "<br /><br />";
			
			// A função "count" conta quantas posições um array tem.
			for($i=0; $i < count($animais); $i++){
				echo $animais[$i]."<br />";
			}
			
			echo "<br /><br />";
			
			$limite = 5;
			$cont = 0;
			$array = array();
			
			while($limite > $cont){
				$array[] = "Teste<br />";
				$cont++;
			}
			
			print_r($array);
			
		
		
		?>
	
	</body>
</html>