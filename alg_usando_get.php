<!--Usando o GET para manipular valores.-->
<?php
	$var_usu = $_GET['numero'];
	
	if($var_usu > 3){
		echo "<p>O número informado é maior que 3.</p>";
	}elseif($var_usu == 3){
		echo "<p>O número informado é igual a 3.</p>";
		
	}else{
		echo"<p>O número informado é menor que 3.</p>";
	}

?>
