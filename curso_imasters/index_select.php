<?php 

$pdo = new PDO('mysql:host=localhost;dbname=curso_php_oop','root','');
$select = $pdo->query('SELECT * FROM usuario;');

$dados = $select->fetchAll();

?>

<pre>
	<?php var_dump($dados); ?>
</pre>