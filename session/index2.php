<?php
/**
 * Created by PhpStorm.
 * User: MTedeschi
 * Date: 13/01/2016
 * Time: 16:22
 */

//Só quem acertar o login e senha da index vai poder ver a página secreta.

session_start();// Iniciando uma sessão - Sempre tem que estar no começo da página.

$login = "minhasenha";
$senha = "123";

if($login == "minhasenha" and $senha == "123"){
    $_SESSION['logado'] = true; // Registrando uma variável de sessão.
    header("location: secreto2.php"); //Redirecionando para a página de login.
}else{
    echo "Login não pode ser efetuado.";
}

?>