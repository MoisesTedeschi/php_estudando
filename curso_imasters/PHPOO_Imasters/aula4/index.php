
	<?php 
		header('Content-type: text/html; charset=UTF-8'); 
			
		define('ROOT', dirname(__FILE__));
		define('DS', DIRECTORY_SEPARATOR);

		include ROOT.DS.'vendor'.DS.'autoload.php';

		$BancoDeDados = new Core\BancoDeDados\BancoDeDados();
		
		$pdo = $BancoDeDados->conecta();

		$select = $pdo->prepare('SELECT * FROM pessoa WHERE nome_pessoa=:nome_pessoa;');
		$select->bindValue(':nome_pessoa', $_GET['nome_pessoa']);
		$select->execute();

		$dados = $select->fetchAll(PDO::FETCH_ASSOC);

		?>
		<pre>
			<?php print_r($dados) ?>
		</pre>
	?>


