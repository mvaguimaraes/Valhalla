<?php

//conectando com o localhost - mysql

//CADASTRO DE ATENDENTE
$id = $_POST['id'];
$atendente = $_POST["atendente"];
$nomecli = $_POST["nomecli"];
$filme = $_POST["filme"];
$datareq = $_POST["datareq"];
$datares = $_POST["datares"];


$conexao = mysql_connect("localhost","root");

if (!$conexao)

	die ("Erro de conexão com localhost, o seguinte erro ocorreu -> ".mysql_error());
	
//conectando com a tabela do banco de dados

$banco = mysql_select_db("valhalla",$conexao);


if (!$banco)

	die ("Erro de conexão com banco de dados, o seguinte erro ocorreu -> ".mysql_error());
	


    mysql_query("UPDATE  `valhalla`.`reservaatendente` SET `CodAtendente` ='$atendente' ,`CodCliente` = '$nomecli' ,`CodFilme` = '$filme' ,`DataRequisitada` = '$datareq' ,`DataFeitaReserva` = '$datares' , `Situacao` = 'Andamento'  WHERE  `reservaatendente`.`CodReservaAtendente` ='$id';");
    echo "<script>alert('Editado com sucesso!');top.location.href='atendente_index.php';</script>";

?>	   