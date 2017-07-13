<?php

 $conecta=mysql_connect('localhost','root','');
 mysql_select_db('valhalla');

$campocodigo = $_POST["campocodigo"];


//////////////////////////////////////////////

//conectando com o localhost - mysql
$conexao = mysql_connect("localhost","root");
if (!$conexao)
	die ("Erro de conexão com localhost, o seguinte erro ocorreu -> ".mysql_error());
//conectando com a tabela do banco de dados
$banco = mysql_select_db("valhalla",$conexao);
if (!$banco)
	die ("Erro de conexão com banco de dados, o seguinte erro ocorreu -> ".mysql_error());


$sql=("DELETE FROM `reservaatendente` WHERE CodReservaAtendente='$campocodigo'");
$deleta=mysql_query($sql);

echo "<script>alert('Excluido com sucesso!');top.location.href='atendente_pesquisar_reserva1.php';</script>";

mysql_query($sql,$conexao);



?>	   
