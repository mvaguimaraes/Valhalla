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
<li class="list"><a class="category" href="atendente_index.php">Home</a></li>
</ul>

<!-- Menu Principal: Aba Cadastro-->
<ul class="menu">
<li class="list">
<a class="category" href="#cadastro">Cadastro&nbsp;&nbsp;&raquo;</a>
<ul class="submenu">
<li><a href="atendente_cad_cliente.php">Cliente</a></li>
<li><a class="endlist" href="atendente_cad_filme.php">Filme</a></li>
<!-- <li><a class="endlist" href="#about5">About link 5</a></li> -->
</ul>
</li>

<!-- Menu Principal: Aba Reservar-->
</ul>
<ul class="menu">
<li class="list">
<a class="category" href="#reserva">Reservar&nbsp;&nbsp;&raquo;</a>
<ul class="submenu">
<li><a href="atendente_reserva.php">Reservar</a></li>
<li><a href="atendente_reserva_finalizar.php">Finalizar</a></li>
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
<li><a href="atendente_emprestimo.php">Emprestar</a></li>
<li><a href="atendente_devolver.php">Devolver</a></li>
</ul>
</li>
</ul>

<!-- Menu Principal: Pesquisar-->
<ul class="menu">
<li class="list">
<a class="category" href="#pesquisa">Pesquisar&nbsp;&nbsp;&raquo;</a>
<ul class="submenu">
<li><a href="atendente_pesquisar_cliente1.php">Clientes</a></li>
<li><a href="atendente_pesquisar_emprestimo1.php">Empr&eacute;stimos</a></li>
<li><a href="atendente_pesquisar_reserva1.php">Reservas Ate</a></li>
<li><a href="atendente_pesquisar_reserva_cliente1.php">Reservas Cli</a></li>
<li><a class="endlist" href="atendente_pesquisar_filme1.php">Filmes</a></li>
<!-- <li><a class="endlist" href="#about5">About link 5</a></li> -->
</ul>
</li>
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
			
			<form name="form1" method="post" action="cad_filme_atendente.php" enctype="multipart/form-data">
			<fieldset>
				<h1>Cadastro de Filme</h1><br><br>
				Nome:<br>
				<input type="text" name="nome" id="nome"  maxlength="60" size="60" required/><br /><br>
				
				Data de Lan&ccedil;amento:<br>
				<input type="date" required name="data" pattern="[0-9]{8}"  maxlength="8" placeholder="AAAA/MM/DD (só numeros)"  /><br /><br>
				
				Produtora:<br>
				<input type="text" name="Produtora" id="Produtora"  maxlength="60" size="60" required/><br /><br>
				
				Diretor:<br>
				<input type="text" name="Diretor" id="Diretor"  maxlength="60" size="60" required/><br /><br>
				
				Pre&ccedil;o do Aluguel:<br>
				<select name="preco" id="caixas">  
					<option value="5.00">Blu-Ray Lan&ccedil;amento: R$5,00</option>
					<option value="4.50">Blu-Ray Ouro: R$4,50</option> 
					<option value="4.00">Blu-Ray Prata: R$4,00</option> 
					<option value="3.50">Blu-Ray Bronze: R$3,50</option>
					<option value="4.00">DVD Lan&ccedil;amento: R$4,00</option> 
					<option value="3.50">DVD Ouro: R$3,50</option> 
					<option value="3.00">DVD Prata: R$3,00</option>  
					<option value="2.50">DVD Bronze: R$2,50</option>
						
				</select><br><br>
				
				Elenco Principal:<br>
				<textarea name="elenco" rows="10" cols="60"   maxlength="1000" placeholder="Digite aqui elenco principal..."></textarea><br><br />
				
				Categoria:<br>
				<select name="categoria" id="caixas">  
					<option value="A&ccedil;&atilde;o">A&ccedil;&atilde;o</option>  
					<option value="Anima&ccedil;&atilde;o">Anima&ccedil;&atilde;o</option>
					<option value="Aventura">Aventura</option>
					<option value="Com&eacute;dia">Com&eacute;dia</option>
					<option value="Com&eacute;dia Rom&acirc;ntica">Com&eacute;dia Rom&acirc;ntica</option>
					<option value="Document&aacute;rio">Document&aacute;rio</option>
					<option value="Drama">Drama</option>
					<option value="Espionagem">Espionagem</option>
					<option value="Fantasia">Fantasia</option>
					<option value="Faroeste">Faroeste</option>
					<option value="Fic&ccedil;&atilde;o Cient&iacute;fica">Fic&ccedil;&atilde;o Cient&iacute;fica</option>
					<option value="Guerra">Guerra</option>
					<option value="Musical">Musical</option>
					<option value="Romance">Romance</option>
					<option value="Suspense">Suspense</option>
					<option value="Terror">Terror</option>
				</select><br><br>
				
				M&iacute;dia:<br>
				<select name="midia" id="caixas">  
					<option value="DVD">DVD</option>  
					<option value="Blu-Ray">Blu-Ray</option>  
				</select><br><br>
				
				Quantidade:<br>
				<input type="text" name="quantidade" id="quantidade"  maxlength="60" size="60" required/><br /><br>
				
				Sinopse:<br>
				<textarea name="sinopse" rows="10" cols="60" placeholder="Digite aqui a sinopse do filme em quest&atilde;o..."></textarea><br><br />
				
				Foto de exibi&ccedil;&atilde;o:<br>
				<input type="file" name="foto" /><br><br>
				
				
				<input type="submit" value="Enviar">
				<input type="submit" value="Cancelar">

				
			</form>	

		
				
</div>

<div id="footer">
</br>
	<div id="altnav">
		<a href="atendente_about.php">Sobre N&oacute;s</a> -
		<a href="atendente_contact.php">Contate-nos</a>
	</div>
Copyright &copy; Locadora Valhalla</br>
</div>

</body>