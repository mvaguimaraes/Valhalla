<?php

$conecta=mysql_connect('localhost', 'root','');
mysql_select_db('valhalla');

//RESERVA DO CLIENTE

$nomecli = $_POST["nomecli"];
$filme = $_POST["filme"];
$datareq = $_POST["datareq"];
$datares = $_POST["datares"];
$data_atual = date("Y-m-d"); 


//conectando com o localhost - mysql
$conexao = mysql_connect("localhost","root");
if (!$conexao)
	die ("Erro de conexão com localhost, o seguinte erro ocorreu -> ".mysql_error());
//conectando com a tabela do banco de dados
$banco = mysql_select_db("valhalla",$conexao);
if (!$banco)
	die ("Erro de conexão com banco de dados, o seguinte erro ocorreu -> ".mysql_error());
	
	
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
	
	 $dias = diasEntre($data_atual, $datares);
	 $dias2 = diasEntre($data_atual, $datareq);
	 
	 if($dias!=0 && $dias2<0){
	 echo "<script>alert('Ambas as datas nao sao validas!');top.location.href='cliente_reserva_cliente.php';</script>";
	 }
	 
	 else if($dias!=0){
	 echo "<script>alert('Data de hoje incorreta!');top.location.href='cliente_reserva_cliente.php';</script>";
	 }
	 
	 else if($dias2<0){
     echo "<script>alert('A data requisitada ja passou!');top.location.href='cliente_reserva_cliente.php';</script>";
	 }	
	 
	 
	 
	 else{
	
	
$query2 = ("SELECT * FROM reservaatendente WHERE `CodFilme` LIKE '$filme' AND `DataRequisitada` = '$datareq' AND `Situacao` = 'Andamento';");
$var = mysql_query($query2);
$var2 = mysql_num_rows($var);
//echo $var2;


$query3 = ("SELECT * FROM reservacliente WHERE `CodFilme` LIKE '$filme' AND `DataRequisitada` = '$datareq' AND `Situacao` = 'Andamento';");
$var3 = mysql_query($query3);
$var4 = mysql_num_rows($var3);
//echo $var4;	

$qttotal = $var2+$var4;

$query4 = mysql_query ("SELECT `Qtreserva` FROM filme WHERE `Nome` LIKE '$filme'");
$var5 = mysql_fetch_array($query4);	


if($qttotal >= $var5['Qtreserva']){
echo "<script>alert('Todos os exemplares desse filme ja foram reservados para esse dia!');top.location.href='cliente_index.php';</script>";
}

else{

$query = "INSERT INTO `valhalla`.`reservacliente` (`CodCliente` ,`CodFilme` ,`DataRequisitada` ,`DataFeitaReserva`, `Situacao`)
VALUES ('$nomecli', '$filme', '$datareq', '$datares', 'Andamento')";

//mysql_query("UPDATE  `valhalla`.`filme` SET `Qtreserva`=`Qtreserva`-1 WHERE `filme`.`Nome` LIKE '$filme';");

mysql_query($query,$conexao);

echo "<script>alert('Sua reserva foi realizada com sucesso!');top.location.href='cliente_index.php';</script>";

}
}

?>