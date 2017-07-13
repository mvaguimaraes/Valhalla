<?php

$conecta=mysql_connect('localhost', 'root','');
mysql_select_db('valhalla');

//RESERVA DO ATENDENTE
$atendente = $_POST["atendente"];
$nomecli = $_POST["nomecli"];
$filme = $_POST["filme"];
$datareq = $_POST["datareq"];
$datares = $_POST["datares"];


//conectando com o localhost - mysql
$conexao = mysql_connect("localhost","root");
if (!$conexao)
	die ("Erro de conexão com localhost, o seguinte erro ocorreu -> ".mysql_error());
//conectando com a tabela do banco de dados
$banco = mysql_select_db("valhalla",$conexao);
if (!$banco)
	die ("Erro de conexão com banco de dados, o seguinte erro ocorreu -> ".mysql_error());
	

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
echo "<script>alert('Todos os exemplares desse filme ja foram reservados para esse dia!');top.location.href='gerente_index.php';</script>";
}

else{

$query = "INSERT INTO `valhalla`.`reservaatendente` (`CodAtendente` ,`CodCliente` ,`CodFilme` ,`DataRequisitada` ,`DataFeitaReserva`, `Situacao`)
VALUES ('$atendente' , '$nomecli', '$filme', '$datareq', '$datares', 'Andamento')";

//mysql_query("UPDATE  `valhalla`.`filme` SET `Qtreserva`=`Qtreserva`-1 WHERE `filme`.`Nome` LIKE '$filme';");

mysql_query($query,$conexao);

echo "<script>alert('Sua reserva foi realizada com sucesso!');top.location.href='gerente_index.php';</script>";

}

?>