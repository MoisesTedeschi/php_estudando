<?php 
include'conecta.php';

#Retorna um novo ojeto string
$select = $pdo->query('SELECT * FROM pessoa;');

#Traz todos os resultados encontrados nessa query (FecthAll)

$dados = $select->fetchAll(PDO::FETCH_ASSOC);

//Retorna em formato de Objeto
// $dados = $select->fetchAll(PDO::FETCH_OBJ);
?>

<pre>
	<?php print_r($dados) ?>
</pre>
