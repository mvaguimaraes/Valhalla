<?php

$conecta=mysql_connect('localhost', 'root','');
mysql_select_db('valhalla');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-type" content="text/html; charset=UTF-8" />
<title>Locadora Valhalla - Main Page</title>
<meta http-equiv="Content-Language" content="en-us" />

<meta http-equiv="imagetoolbar" content="no" />
<meta name="MSSmartTagsPreventParsing" content="true" />

<meta name="description" content="Description" />
<meta name="keywords" content="Keywords" />

<meta name="Marcos Guimar&atilde;es" content="Locadora Valhalla" />
<link rel="stylesheet" type="text/css" href="engine1/style.css" />
<script type="text/javascript" src="engine1/jquery.js"></script>
<link href="css/master.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/styles.css" />
<script type='text/javascript' src="./js/jquery.imageScroller.js"></script>
<script type='text/javascript' src="./js/test.js"></script>
<link rel="stylesheet" type="text/css" href="./css/scroll.css" />

</head>

<body>

<div id="page-container">

<div id="main-nav">
<ul class="social_network">
<a href="http://www.facebook.com/" target="_parent"><img src="images/facebook_icon.png" alt="facebook"/></a>
<a href="http://www.twitter.com/" target="_parent"><img src="images/twitter_icon.png" alt="twitter"/></a>
<a href="http://www.youtube.com/" target="_parent"><img src="images/youtube_icon.png" alt="youtube"/></a>
<a href="http://www.google.com/+" target="_parent"><img src="images/google+_icon.png" alt="google+"/></a>
</ul>

<div class="wrapper"> 
<div class="mainmenu">

<!-- Menu Principal: Aba Home-->
<ul class="menu">
<li class="list"><a class="category" href="gerente_index.php">Home</a></li>
</ul>

<!-- Menu Principal: Aba Cadastro-->
<ul class="menu">
<li class="list">
<a class="category" href="#cadastro">Cadastro&nbsp;&nbsp;&raquo;</a>
<ul class="submenu">
<!--<li><a href="gerente_cad_atendente.html">Atendente</a></li>-->
<li><a href="gerente_cad_usuario.php">Usu&aacute;rio</a></li>
<!--<li><a href="gerente_cad_gerente.html">Gerente</a></li>-->
<li><a class="endlist" href="gerente_cad_filme.php">Filme</a></li>
<!-- <li><a class="endlist" href="#about5">About link 5</a></li> -->
</ul>
</li>

<!-- Menu Principal: Aba Reservar-->
</ul>
<ul class="menu">
<li class="list">
<a class="category" href="#reserva">Reservar&nbsp;&nbsp;&raquo;</a>
<ul class="submenu">
<li><a href="gerente_reserva.php">Reservar</a></li>
<li><a href="gerente_reserva_finalizar.php">Finalizar</a></li>
</ul>
</li>
</ul>

<!-- Menu Principal: Aba Empréstimo
<ul class="menu">
<li class="list"><a class="category" href="gerente_emprestimo.php">Empr&eacute;stimo</a></li>
</ul>-->

<ul class="menu">
<li class="list">
<a class="category" href="#emprestimo">Empr&eacute;stimo&nbsp;&nbsp;&raquo;</a>
<ul class="submenu">
<li><a href="gerente_emprestimo.php">Emprestar</a></li>
<li><a href="gerente_devolver.php">Devolver</a></li>
</ul>
</li>
</ul>

<!-- Menu Principal: Pesquisar-->
<ul class="menu">
<li class="list">
<a class="category" href="#pesquisa">Pesquisar&nbsp;&nbsp;&raquo;</a>
<ul class="submenu">
<li><a href="gerente_pesquisar_atendente1.php">Atendentes</a></li>
<li><a href="gerente_pesquisar_cliente1.php">Clientes</a></li>
<li><a href="gerente_pesquisar_gerente1.php">Gerentes</a></li>
<li><a href="gerente_pesquisar_emprestimo1.php">Empr&eacute;stimos</a></li>
<li><a href="gerente_pesquisar_reserva1.php">Reservas Ate</a></li>
<li><a href="gerente_pesquisar_reserva_cliente1.php">Reservas Cli</a></li>
<li><a class="endlist" href="gerente_pesquisar_filme1.php">Filmes</a></li>
<!-- <li><a class="endlist" href="#about5">About link 5</a></li> -->
</ul>
</li>
</ul>

<!-- Menu Principal: Aba Relatórios-->
<ul class="menu">
<li class="list"><a class="category" href="gerente_relatorio1.php">Relat&oacute;rios</a></li>
</ul>

<!-- Menu Principal: Aba Login-->
<ul class="menu">
<li class="list"><a class="category" href="usuario_sem_login_login.php">Sair [<?php session_start(); $usuario=$_SESSION['login'];echo $usuario;?>]</a></li>
</ul>
</div>
</div>
</div>

<div id="limit">
<div id="wowslider-container1">
	<div class="ws_images"><ul>
<li><img src="data1/images/header.jpg" alt="header" title="Locadora Valhalla, h&aacute; 10 anos entretendo voc&ecirc; e sua fam&iacute;lia." id="wows1_0"/></li>
<li><img src="data1/images/header3.jpg" alt="header3" title="Cadastre-se agora e aproveite os diversos servi&ccedil;os que oferecemos." id="wows1_1"/></li>
<li><img src="data1/images/header1.jpg" alt="header1" title="Os &uacute;ltimos lan&ccedil;amentos aqui,  &agrave; sua disposi&ccedil;&atilde;o." id="wows1_2"/></li>
<li><img src="data1/images/header2.jpg" alt="header2" title="Os melhores pre&ccedil;os do mercado de loca&ccedil;&atilde;o de filmes." id="wows1_3"/></li>
</ul></div>
<div class="ws_bullets"><div>
<a href="#" title="header"><img src="data1/tooltips/header.jpg" alt="header"/>1</a>
<a href="#" title="header3"><img src="data1/tooltips/header3.jpg" alt="header3"/>2</a>
<a href="#" title="header1"><img src="data1/tooltips/header1.jpg" alt="header1"/>3</a>
<a href="#" title="header2"><img src="data1/tooltips/header2.jpg" alt="header2"/>4</a>
</div></div>

	<a href="#" class="ws_frame"></a>
	</div>
	<script type="text/javascript" src="engine1/wowslider.js"></script>
	<script type="text/javascript" src="engine1/script.js"></script>
</div>

<div id="header"></div>

<div >
			
			<form name="form1" method="post" action="cad_usuario.php">
			<fieldset>
				<h1>Cadastro de Usu&aacute;rio</h1><br><br>
				
				<h3>Tipo de Usu&aacute;rio</h3>
				<select name="tiposusu" id="tiposusu">  
					<option value="atendente">Atendente</option>  
					<option value="cliente">Cliente</option>  
					<option value="gerente">Gerente</option>   
				</select><br><br><br>
				
				<h3>Dados Principais</h3><br><br>
				Nome:<br>
				<input type="text" name="nome" id="nome"  maxlength="60" size="60" required /><br /><br>

				CPF:<br>
				<input required name="cpf" id="cpf" pattern="[0-9]{11}"  maxlength="11" placeholder="ex. 99999999999" required /><br /><br>

				Telefone:<br>
				<input type="text" name="telefone" pattern="[0-9]{10}" maxlength="10" size="60" id="telefone"/><br /><br>

				E-mail:<br>
				<input type="email" name="endemail" id="endemail" size="40" placeholder="email@seuprovedor.com.br" required /><br /><br><br>
				
				
				<h3>Endere&ccedil;o</h3><br><br>	

				Rua:<br>
				<input type="text" name="rua" id="rua"  maxlength="60" size="60" required/><br /><br>
				
				N&uacute;mero:<br>
				<input type="text" name="numero" id="numero" maxlength="60" size="60" required/><br /><br>

				Complemento:<br>
				<input type="text" name="complemento" id="complemento"  maxlength="60" size="60" /><br /><br>

				Bairro:<br>
				<input type="text" name="bairro" id="bairro"  maxlength="60" size="60" required/><br /><br>

				CEP:<br>
				<input type="text" name="cep" id="cep" pattern="[0-9]{8}" maxlength="8" size="60" required/><br /><br>

				Cidade:<br>
				<input type="text" name="cidade" id="cidade"  maxlength="60" size="60" required/><br /><br>		
				
				Estado:<br>
				<select name="estados" id="caixas">  
					<option value="AC">AC</option>  
					<option value="AL">AL</option>  
					<option value="AM">AM</option>  
					<option value="AP">AP</option>  
					<option value="BA">BA</option>  
					<option value="CE">CE</option>  
					<option value="DF">DF</option>  
					<option value="ES">ES</option>  
					<option value="GO">GO</option>  
					<option value="MA">MA</option>  
					<option value="MG">MG</option>  
					<option value="MS">MS</option>  
					<option value="MT">MT</option>  
					<option value="PA">PA</option>  
					<option value="PB">PB</option>  
					<option value="PE">PE</option>  
					<option value="PI">PI</option>  
					<option value="PR">PR</option>  
					<option value="RJ">RJ</option>  
					<option value="RN">RN</option>  
					<option value="RO">RO</option>  
					<option value="RR">RR</option>  
					<option value="RS">RS</option>  
					<option value="SC">SC</option>  
					<option value="SE">SE</option>  
					<option value="SP">SP</option>  
					<option value="TO">TO</option>  
				</select><br><br><br>
				
				
				<h3>Dados de Acesso</h3><br><br>
				Usu&aacute;rio:<br>
				<input type="text" name="usuario" id="usuario" maxlength="10" required /><br /><br>
				Senha:<br>
				<input type="password" name="senha" id="senha" maxlength="20" required /><br /><br />	
				Confirmar Senha:<br>
				<input type="password" name="confsenha" maxlength="20" required /><br /><br />
				
				<input type="submit" value="Enviar">
				<input type="submit" value="Cancelar">

				
			</form>	
				

				
				
		</div>

<div id="footer">
</br>
	<div id="altnav">
		<a href="gerente_about.php">Sobre N&oacute;s</a> -
		<a href="gerente_contact.php">Contate-nos</a>
	</div>
Copyright &copy; Locadora Valhalla</br>
</div>

</body>