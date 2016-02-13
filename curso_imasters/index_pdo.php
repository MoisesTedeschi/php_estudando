<?php 
	
	/**
	 *if($numeroqualquer > 4){
		echo "Numero maior que 4.";
		}else{
		echo "Numero nao e maior que 4.";
		}
	 *
	 * 
	 */
	
	$pdo = new PDO('mysql:host=localhost;dbname=curso_php_oop','root','');
	//Var_dump retorna o número de instruções que você alterou
	var_dump($pdo->exec('INSERT INTO usuario(nome_usu,email_usu,senha_usu) VALUES("Moisés Tedeschi de Melo","moisestedeschi@gmail.com","123456789");'));



 ?>