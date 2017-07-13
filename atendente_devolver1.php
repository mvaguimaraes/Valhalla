<?php

//conectando com o localhost - mysql

//DEVOLVER FILME
$id = $_POST['id'];
$datadev = $_POST["datadev"];
$filme = $_POST["filme"];
//$multa = $_POST["multa"];
//$situacao = $_POST["situacao"];

$conexao = mysql_connect("localhost","root");

if (!$conexao)

	die ("Erro de conexão com localhost, o seguinte erro ocorreu -> ".mysql_error());
	
//conectando com a tabela do banco de dados

$banco = mysql_select_db("valhalla",$conexao);


if (!$banco)

	die ("Erro de conexão com banco de dados, o seguinte erro ocorreu -> ".mysql_error());
	


    mysql_query("UPDATE  `valhalla`.`emprestimo` SET `DataDevolucao`='$datadev' WHERE  `emprestimo`.`CodEmprestimo` ='$id';");

	$dataemp = mysql_query("Select `DataEmprestimo` from emprestimo WHERE `CodEmprestimo` = '$id';");
	
	while($row=mysql_fetch_array($dataemp)){
	
	$data = $row['DataEmprestimo'];
	}
	
	$datadevol = mysql_query("Select `DataDevolucao` from emprestimo WHERE `CodEmprestimo` = '$id';");
	
	while($row=mysql_fetch_array($datadevol)){
	
	$data1 = $row['DataDevolucao'];
	}
	
	function timesec($data)
	{
		$partes = explode('-',$data);
		return mktime(0,0,0,$partes[1],$partes[2],$partes[0]);
	}
	
	function diasEntre($dataInicial, $dataFinal)
	{
		$tempoInicial = timesec($dataInicial);
		$tempoFinal = timesec($dataFinal);
		
		$diferencaEmSegundos = $tempoFinal - $tempoInicial;
		
		$dias = (int)floor($diferencaEmSegundos / (60*60*24));
		return $dias;
	}
	
	 $dias = diasEntre($data, $data1);
	 
	 
	 $preco = mysql_query("Select `Preco` from filme WHERE `Nome` = '$filme';");
	
	 while($row=mysql_fetch_array($preco)){
	
	 $preco1 = $row['Preco'];
	 }	
	 
	 $precofinal = $preco1*$dias;
	 
	 mysql_query("UPDATE  `valhalla`.`emprestimo` SET `Multa`='$precofinal' WHERE  `emprestimo`.`CodEmprestimo` ='$id';");
	 
	 mysql_query("UPDATE  `valhalla`.`emprestimo` SET `Situacao`='Finalizado' WHERE  `emprestimo`.`CodEmprestimo` ='$id';");
	 
	 $qtdfilm = mysql_query("Select `Quantidade` from filme WHERE `Nome` = '$filme';");
	
	 while($row=mysql_fetch_array($qtdfilm)){
	
	 $quantf = $row['Quantidade'];
	 }	
	 
	 $qtdatual = $quantf + 1;
	 
	 mysql_query("UPDATE  `valhalla`.`filme` SET `Quantidade`='$qtdatual' WHERE  `Nome` = '$filme';");
	 
         echo "<script>alert('O filme ".$filme." foi devolvido com sucesso, o valor da operacao foi: R$".$precofinal."!');top.location.href='atendente_index.php';</script>";
	 
	//mysql_query("UPDATE  `valhalla`.`emprestimo` SET `Multa`=`Preco`*'$dias' WHERE  `emprestimo`.`CodEmprestimo` ='$id';");
    //echo 'Devolvido com sucesso';

	/*$array = explode("-",$data);
	$ano = $array[0];
	$mes = $array[1];
	$dia = $array[2];
	
	$array1 = explode("-",$datadev);
	$ano1 = $array1[0];
	$mes1 = $array1[1];
	$dia1 = $array1[2];
	
    $data1="$ano-$mes-$dia";
	$data2="$ano1-$mes1-$dia1";
	
	$data3=$data2-$data1;*/
	

	
	
	//$diferenca = mysql_query("Select DATEDIFF(a`DataDevolucao`,`DataEmprestimo`) FROM `emprestimo` WHERE `CodEmprestimo` = '$id';");	

	
	
?>
	
   