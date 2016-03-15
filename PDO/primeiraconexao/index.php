<?php 
include'conecta.php';

#Exec executa as linhas de comando dentro dele.
var_dump($pdo->exec('INSERT INTO pessoa (nome_pessoa, idade_pessoa, email_pessoa) VALUES ("Maria", "17","mary@bol.com.br");')); 
#Var_dump vai retornar o valor de linhas que estão sendo manipuladas.
?>