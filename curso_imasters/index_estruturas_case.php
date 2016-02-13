<?php 

define('DS', DIRECTORY_SEPARATOR);

$arquivo = (isset($_GET['arquivo'])) ? $_GET['arquivo'] : '';

switch ($arquivo) {
	case 'ifelse':
		include 'estruturas'.DS.'ifelse.php';
		break;
	
	case 'switch':
		include 'estruturas'.DS.'switch.php';
		break;

	case 'for':
		include 'estruturas'.DS.'for.php';
		break;

	case 'foreach':
		include 'estruturas'.DS.'foreach.php';
		break;

	case 'while':
		include 'estruturas'.DS.'while.php';
		break;

	default:
		echo "Informe uma pagina!";
		break;
}

?>

<ul>
	<li><a href="index_estruturas_case.php?arquivo=ifelse">Pagina do IfElse</a></li>
	<li><a href="index_estruturas_case.php?arquivo=switch">Pagina do Switch</a></li>
	<li><a href="index_estruturas_case.php?arquivo=for">Pagina do For</a></li>
	<li><a href="index_estruturas_case.php?arquivo=foreach">Pagina do Foreach</a></li>
	<li><a href="index_estruturas_case.php?arquivo=while">Pagina do While</a></li>

	</ul>