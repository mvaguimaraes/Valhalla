<?php

//conectando com o localhost - mysql

//CADASTRO DE ATENDENTE
$id = $_POST['id'];
$atendente = $_POST["atendente"];
$nomecli = $_POST["nomecli"];
$filme = $_POST["filme"];
$dataemp = $_POST["dataemp"];




$conexao = mysql_connect("localhost","root");

if (!$conexao)

	die ("Erro de conexão com localhost, o seguinte erro ocorreu -> ".mysql_error());
	
//conectando com a tabela do banco de dados

$banco = mysql_select_db("valhalla",$conexao);


if (!$banco)

	die ("Erro de conexão com banco de dados, o seguinte erro ocorreu -> ".mysql_error());
	


$nomef = mysql_query("Select `CodFilme` from emprestimo WHERE `CodEmprestimo` = '$id';");
	
	while($row=mysql_fetch_array($nomef)){
	
	$nomefilme = $row['CodFilme'];
	}
	
	if($nomefilme == $filme){

    mysql_query("UPDATE  `valhalla`.`emprestimo` SET `CodAtendente` ='$atendente' ,`CodCliente` = '$nomecli' ,`CodFilme` = '$filme' ,`DataEmprestimo` = '$dataemp' , `Situacao` = 'Andamento'  WHERE  `emprestimo`.`CodEmprestimo` ='$id';");
    echo "<script>alert('Editado com sucesso!');top.location.href='gerente_index.php';</script>";
	
	}
	
	else{
	
	mysql_query("UPDATE  `valhalla`.`filme` SET `Quantidade` = Quantidade + 1  WHERE  `filme`.`Nome` ='$nomefilme';");
	mysql_query("UPDATE  `valhalla`.`filme` SET `Quantidade` = Quantidade - 1  WHERE  `filme`.`Nome` ='$filme';");
	mysql_query("UPDATE  `valhalla`.`emprestimo` SET `CodAtendente` ='$atendente' ,`CodCliente` = '$nomecli' ,`CodFilme` = '$filme' ,`DataEmprestimo` = '$dataemp' , `Situacao` = 'Andamento'  WHERE  `emprestimo`.`CodEmprestimo` ='$id';");
	
    echo "<script>alert('Editado com sucesso!');top.location.href='gerente_index.php';</script>";
	}

?>	   