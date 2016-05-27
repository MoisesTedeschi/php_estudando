<?php 
include'conecta.php';

$select = $pdo->prepare('SELECT * FROM pessoa WHERE id=:id;');
$select->bindValue(':id', $_GET['id']);
$select->execute();

$dados = $select->fetch(PDO::FETCH_ASSOC);

?>
<pre>
	<?php print_r($dados) ?>
</pre>