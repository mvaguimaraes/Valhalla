<?php
//conex�o com banco de dados MySQL

$dbhost="localhost"; //nome do servidor que hospeda o banco de dados
$dbuser="root";   // usuario do banco de dados
$dbpasswd="";   // senha usada para entrar no banco de dados
$dbname="valhalla";  // nome que voc� deu ao seu banco de dados
$conexao = @mysql_pconnect($dbhost, $dbuser, $dbpasswd) or die ("N�o foi poss�vel conectar-se ao servidor MySQL");
$db = @mysql_select_db($dbname) or die ("N�o foi poss�vel selecionar o banco de dados <b>$dbname</b>");

?>