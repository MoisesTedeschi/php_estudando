<?php session_start(); ?>
<!-- Iniciando uma sessão - Sempre tem que estar no começo da página.-->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Acesso a área restrita!</title>
    <meta charset="UTF-8" />
</head>
<body>
    <?php if(isset($_SESSION['logado'])):?>
        <h1>Você está acessando uma área restrita.</h1>

        <a href="logout.php">Sair</a>
    <?php else:?>
        <h2>My friend, faça o login para ter acesso a essa informação, ok?</h2>
        <a href="index2.php">Login</a>
    <?php endif;?>

</body>
</html>