<?php
/**
 * Created by PhpStorm.
 * User: MTedeschi
 * Date: 13/01/2016
 * Time: 11:36
 */

$cor = "red";
setcookie("cor",$cor,time()+3600); //Duração por uma hora
/*

setcookie("cor",$cor,time()+3600 *24*7*4); // Duração por um mês
setcookie("cor",$cor,time()+3600*24*7); //Duaração por uma semana
setcookie("cor",$cor,time()+3600 *24*7*4); // Duração por um mês

--

setcookie("cor",$cor,time()+3600,"nome_da_pasta_que_o_cookie_e_valido",".nomedominioqueocookieevalido.com");

*/

?>
<a href="index.php">Testando o Cookie!</a>
