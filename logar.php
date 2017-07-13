<?php

$conecta=mysql_connect('localhost', 'root','');
mysql_select_db('valhalla');

$usuario = $_POST["login"];
$senha = $_POST["senha"];
$tiposusu = $_POST["tipousu"];

if($tiposusu == "cliente"){
	/* Verifica se existe usuario, o segredo ta aqui quando ele procupa uma 
	linha q contenha o login e a senha digitada */
	$sql_logar = "SELECT * FROM cliente WHERE Usuario = '$usuario' && Senha = '$senha'";
	$exe_logar = mysql_query($sql_logar) or die (mysql_error());
	$fet_logar = mysql_fetch_assoc($exe_logar);
	$num_logar = mysql_num_rows($exe_logar);

	//Verifica se n existe uma linha com o login e a senha digitado
	if ($num_logar == 0){
	   echo "<script>alert('Login ou senha invalido!');top.location.href='usuario_sem_login_login.php';</script>";  
	} 
	elseif($fet_logar['activo'] == "N"){
	   echo "<script>alert('Usuario não ativado, verifique seu e-mail para ativa a conta!');top.location.href='usuario_sem_login_login.php';</script>";  
	}
	else{
	   //Cria a sessão e manda pra pagina principal.php
	   session_start();
	   $_SESSION["login"] = $usuario;
	   $_SESSION["senha"] = $senha;
	   header("Location:cliente_index.php");
	}
}

if($tiposusu == "gerente"){
	/* Verifica se existe usuario, o segredo ta aqui quando ele procupa uma 
	linha q contenha o login e a senha digitada */
	$sql_logar = "SELECT * FROM gerente WHERE Usuario = '$usuario' && Senha = '$senha'";
	$exe_logar = mysql_query($sql_logar) or die (mysql_error());
	$fet_logar = mysql_fetch_assoc($exe_logar);
	$num_logar = mysql_num_rows($exe_logar);

	//Verifica se n existe uma linha com o login e a senha digitado
	if ($num_logar == 0){
	   echo "<script>alert('Login ou senha invalido!');top.location.href='usuario_sem_login_login.php';</script>"; 
	} 
	elseif($fet_logar['activo'] == "N"){
	   echo "<script>alert('Usuario não ativado, verifique seu e-mail para ativa a conta!');top.location.href='usuario_sem_login_login.php';</script>";  
	}
	else{
	   //Cria a sessão e manda pra pagina principal.php
	   session_start();
	   $_SESSION["login"] = $usuario;
	   $_SESSION["senha"] = $senha;
	   header("Location:gerente_index.php");
	}
}

if($tiposusu == "atendente"){
	/* Verifica se existe usuario, o segredo ta aqui quando ele procupa uma 
	linha q contenha o login e a senha digitada */
	$sql_logar = "SELECT * FROM atendente WHERE Usuario = '$usuario' && Senha = '$senha'";
	$exe_logar = mysql_query($sql_logar) or die (mysql_error());
	$fet_logar = mysql_fetch_assoc($exe_logar);
	$num_logar = mysql_num_rows($exe_logar);

	//Verifica se n existe uma linha com o login e a senha digitado
	if ($num_logar == 0){
	   echo "<script>alert('Login ou senha invalido!');top.location.href='usuario_sem_login_login.php';</script>";  
	} 
	elseif($fet_logar['activo'] == "N"){
	   echo "<script>alert('Usuario não ativado, verifique seu e-mail para ativa a conta!');top.location.href='usuario_sem_login_login.php';</script>";  
	}
	else{
	   //Cria a sessão e manda pra pagina principal.php
	   session_start();
	   $_SESSION["login"] = $usuario;
	   $_SESSION["senha"] = $senha;
	   header("Location:atendente_index.php");
	}
}
?>