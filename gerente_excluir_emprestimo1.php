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

	$nomefilme = mysql_query("Select `CodFilme` from emprestimo WHERE `CodEmprestimo` = '$campocodigo';");
	
	 while($row=mysql_fetch_array($nomefilme)){
	
	 $filme = $row['CodFilme'];
	 }	
	 
	
	$qtdfilm = mysql_query("Select `Quantidade` from filme WHERE `Nome` = '$filme';");
	
	 while($row=mysql_fetch_array($qtdfilm)){
	
	 $quantf = $row['Quantidade'];
	 }	
	 
	
	$qtdatual = $quantf + 1;
	 
	 mysql_query("UPDATE  `valhalla`.`filme` SET `Quantidade`='$qtdatual' WHERE  `Nome` = '$filme';");
	
$sql=("DELETE FROM `emprestimo` WHERE CodEmprestimo='$campocodigo'");
$deleta=mysql_query($sql);

echo "<script>alert('Excluido com sucesso!');top.location.href='gerente_pesquisar_emprestimo1.php';</script>";

mysql_query($sql,$conexao);



?>	   
