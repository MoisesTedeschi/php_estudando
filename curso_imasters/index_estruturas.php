<?php 

define('DS', DIRECTORY_SEPARATOR);

$arquivo = (isset($_GET['arquivo'])) ? $_GET['arquivo'] : '';

if($arquivo == 'ifelse'){

	#http://localhost:8080/curso_imasters/index_estruturas.php?arquivo=ifelse
	include 'estruturas'.DS.'ifelse.php';

}elseif($arquivo == 'switch'){

	#http://localhost:8080/curso_imasters/index_estruturas.php?arquivo=switch
	include 'estruturas'.DS.'switch.php';

}elseif($arquivo == 'for'){
	
	#http://localhost:8080/curso_imasters/index_estruturas.php?arquivo=for
	include 'estruturas'.DS.'for.php';

}elseif($arquivo == 'foreach'){

	#http://localhost:8080/curso_imasters/index_estruturas.php?arquivo=foreach
	include 'estruturas'.DS.'foreach.php';

}elseif($arquivo == 'while'){

	#http://localhost:8080/curso_imasters/index_estruturas.php?arquivo=while
	include 'estruturas'.DS.'while.php';
}
else{
	echo "Informe uma pagina!";

}

?>