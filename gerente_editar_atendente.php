<?php

//conectando com o localhost - mysql

//CADASTRO DE ATENDENTE
$id = $_POST['id'];
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

$conexao = mysql_connect("localhost","root");

if (!$conexao)

	die ("Erro de conexão com localhost, o seguinte erro ocorreu -> ".mysql_error());
	
//conectando com a tabela do banco de dados

$banco = mysql_select_db("valhalla",$conexao);


if (!$banco)

	die ("Erro de conexão com banco de dados, o seguinte erro ocorreu -> ".mysql_error());
	
    	if($senha != $confsenha){
	echo "<script>alert('As senhas inseridas nao sao iguais!');top.location.href='gerente_index.php';</script>";
	}
	
else{

    mysql_query("UPDATE  `valhalla`.`atendente` SET `NomeAtendente` ='$nome' ,`CPF`='$cpf' ,`Telefone`='$telefone' ,`Email`='$endemail' ,`Rua`='$rua' ,`Numero`='$numero' ,`Complemento`='$complemento' ,`Bairro`='$bairro' ,`CEP`='$cep' ,`Cidade`='$cidade' ,`Estado`='$estados', `Usuario`='$usuario' ,`Senha`='$senha',`ConfirmaSenha`='$confsenha' WHERE  `atendente`.`CodAtendente` ='$id';");
    echo "<script>alert('Editado com sucesso!');top.location.href='gerente_index.php';</script>";
	
	}

?>	   