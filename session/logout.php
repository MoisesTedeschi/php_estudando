<?php
/**
 * Created by PhpStorm.
 * User: MTedeschi
 * Date: 13/01/2016
 * Time: 20:02
 */

session_start();
    unset($_SESSION['logado']);
    //A função desaparece com a variável. É o contrário do isset que
    // verifica se a variável existe.

    header("location: secreto2.php");
    //Essa é a função de redirecionamento do PHP.
    // Lembrar disso!!!

?>