<?php session_start(); ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Acesso a área restrita!</title>
    <meta charset="UTF-8" />
</head>
<body>
    <?php if($_SESSION['logado']):?>
        <h1>Você está acessando uma área restrita.</h1>
    <?php else:?>
        <h2>My friend, faça o login para ter acesso a essa informação, ok?</h2>
    <?php endif;?>

</body>
</html>