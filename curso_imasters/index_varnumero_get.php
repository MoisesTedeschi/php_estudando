<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>

<?php 
	#Se existir a variável número o valor do usuário é igual a ela.
	#Se não o valor é zero.
	$var_usuario = (isset($_GET['numero'])) ? $_GET['numero'] : 0;

	if($var_usuario > 3){
		echo ("<p>Você digitou um número maior que 3.</p>");

	}elseif ($var_usuario == 3) {
		echo ("<p>O número é igual a 3.</p>");

	}else{
		echo ("<p>Você digitou um número menor que 3.</p>");
	}

?>
</body>
</html>

