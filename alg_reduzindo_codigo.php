<?php
#Testando código mais curto na condicional.

$login = "admin";

/*
if($login == "admin"){

    $resultado = "Verdadeiro";
}else{

    $resultado = "Falso";
}
*/

$resultado = $login=="admin"?$x = "Verdadeiro":$x = "Falso";
echo $resultado;

?>