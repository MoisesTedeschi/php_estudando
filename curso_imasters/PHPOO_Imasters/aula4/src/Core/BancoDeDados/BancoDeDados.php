<?php 
	namespace Core\BancoDeDados;

	class BancoDeDados
	{
		public function conecta()
		{

			$pdo = new \PDO('mysql:host=localhost;dbname=curso_php_oo', 'root', '');
			return $pdo;
		}
	}
