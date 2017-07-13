<?php

$conecta=mysql_connect('localhost', 'root','');
mysql_select_db('valhalla');

//RESERVA DO ATENDENTE
$id = $_POST["id"];
$atendente = $_POST["atendente"];
$nomecli = $_POST["nomecli"];
$filme = $_POST["filme"];
$dataemp = $_POST["dataemp"];


//conectando com o localhost - mysql
$conexao = mysql_connect("localhost","root");
if (!$conexao)
	die ("Erro de conexão com localhost, o seguinte erro ocorreu -> ".mysql_error());
//conectando com a tabela do banco de dados
$banco = mysql_select_db("valhalla",$conexao);
if (!$banco)
	die ("Erro de conexão com banco de dados, o seguinte erro ocorreu -> ".mysql_error());
	

$query2 = mysql_query ("SELECT * FROM filme WHERE `Nome` LIKE '$filme'");
$var = mysql_fetch_array($query2);

$query3 = mysql_query ("SELECT `Quantidade` FROM filme WHERE `Nome` LIKE '$filme'");
$var2 = mysql_fetch_array($query3);	


if($var2['Quantidade']==0){
echo "<script>alert('Todos os exemplares desse filme ja foram alugados, a reserva nao pode ser concluida!');top.location.href='gerente_index.php';</script>";
}

else{


	$query = "INSERT INTO `valhalla`.`emprestimo` (`CodAtendente` ,`CodCliente` ,`CodFilme` ,`DataEmprestimo`, `Situacao`)
	VALUES ('$atendente' , '$nomecli', '$filme', '$dataemp', 'Andamento')";

	/*$query2 = mysql_query ("SELECT `Quantidade` FROM filme WHERE `Nome` LIKE '$filme'");
	$var = mysql_fetch_array($query2);
	echo $var['Quantidade'];*/


	mysql_query("UPDATE  `valhalla`.`reservaatendente` SET `Situacao`='Finalizada' WHERE `reservaatendente`.`CodReservaAtendente` = '$id';");

	mysql_query("UPDATE  `valhalla`.`filme` SET `Quantidade`=`Quantidade`-1 WHERE `filme`.`Nome` LIKE '$filme';");
	
	mysql_query($query,$conexao);

	echo "<script>alert('Sua reserva foi finalizada, o emprestimo foi registrado!');top.location.href='gerente_index.php';</script>";

}
?>