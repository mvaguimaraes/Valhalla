<?php

$conecta=mysql_connect('localhost', 'root','');
mysql_select_db('valhalla');

//CADASTRO DE CLIENTE
$nome = $_POST["nome"];
$cpf = $_POST["cpf"];
$telefone = $_POST["telefone"];
$endemail = $_POST["endemail"];

//ENDEREÇO
$rua = $_POST["rua"];
$numero = $_POST["numero"];
$complemento = $_POST["complemento"];
$bairro = $_POST["bairro"];
$cep = $_POST["cep"];
$cidade = $_POST["cidade"];

//SELECT ESTADO
$estados = $_POST["estados"];
$usuario = $_POST["usuario"];
$senha = $_POST["senha"];
$confsenha = $_POST["confsenha"];


//conectando com o localhost - mysql
$conexao = mysql_connect("localhost","root");
if (!$conexao)
	die ("Erro de conexão com localhost, o seguinte erro ocorreu -> ".mysql_error());
//conectando com a tabela do banco de dados
$banco = mysql_select_db("valhalla",$conexao);
if (!$banco)
	die ("Erro de conexão com banco de dados, o seguinte erro ocorreu -> ".mysql_error());
	

$verif = mysql_query("SELECT * FROM gerente WHERE Usuario = '$usuario'");
$verif2 = mysql_num_rows($verif);

$verif3 = mysql_query("SELECT * FROM atendente WHERE Usuario = '$usuario'");
$verif4 = mysql_num_rows($verif3);

$verif5 = mysql_query("SELECT * FROM cliente WHERE Usuario = '$usuario'");
$verif6 = mysql_num_rows($verif5);

if($verif2!=0 || $verif4 !=0 || $verif6 !=0)
{
  echo "<script>alert('Usuario ja existe!');top.location.href='atendente_cad_cliente.php';</script>";
} 
else{ 
	if($senha != $confsenha){
	echo "<script>alert('As senhas inseridas nao sao iguais!');top.location.href='atendente_cad_cliente.php';</script>";
	}
	

	
else{

$query = "INSERT INTO `valhalla`.`cliente` (`CodCliente` ,`NomeCliente` ,`CPF` ,`Telefone` ,`Email` ,`Rua` ,`Numero` ,`Complemento` ,`Bairro` ,`CEP` ,`Cidade` ,`Estado` ,`Usuario` ,`Senha`,`ConfirmaSenha`)
VALUES (NULL , '$nome', '$cpf', '$telefone', '$endemail', '$rua', '$numero', '$complemento', '$bairro', '$cep', '$cidade', '$estados', '$usuario', '$senha', '$confsenha')";

mysql_query($query,$conexao);

echo "<script>alert('Seu cadastro foi realizado com sucesso!');top.location.href='atendente_index.php';</script>";
}
}


?>
