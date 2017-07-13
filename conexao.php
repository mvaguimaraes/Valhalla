<?php
//conexão com banco de dados MySQL

$dbhost="localhost"; //nome do servidor que hospeda o banco de dados
$dbuser="root";   // usuario do banco de dados
$dbpasswd="";   // senha usada para entrar no banco de dados
$dbname="valhalla";  // nome que você deu ao seu banco de dados
$conexao = @mysql_pconnect($dbhost, $dbuser, $dbpasswd) or die ("Não foi possível conectar-se ao servidor MySQL");
$db = @mysql_select_db($dbname) or die ("Não foi possível selecionar o banco de dados <b>$dbname</b>");

?>