<?php

$conecta=mysql_connect('localhost', 'root','');
mysql_select_db('valhalla');
?>

<html>
<?php



//CADASTRO DE CLIENTE

$dataini = $_POST["dataini"];
$datafim = $_POST["datafim"];


//conectando com o localhost - mysql
$conexao = mysql_connect("localhost","root");
if (!$conexao)
	die ("Erro de conex�o com localhost, o seguinte erro ocorreu -> ".mysql_error());
//conectando com a tabela do banco de dados
$banco = mysql_select_db("valhalla",$conexao);
if (!$banco)
	die ("Erro de conex�o com banco de dados, o seguinte erro ocorreu -> ".mysql_error());

?>

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
<li class="list"><a class="category" href="cliente_index.php">Home</a></li>
</ul>

<!-- Menu Principal: Aba Cadastro-->
<ul class="menu">
<li class="list"><a class="category" href="cliente_editar_cliente1.php">Alterar Dados</a></li>
</ul>

<!-- Menu Principal: Aba Reservar-->
</ul>
<ul class="menu">
<li class="list"><a class="category" href="cliente_reserva_cliente.php">Reservar</a></li>
</ul>

<!-- Menu Principal: Pesquisar-->
<ul class="menu">
<li class="list">
<a class="category" href="#pesquisa">Pesquisar&nbsp;&nbsp;&raquo;</a>
<ul class="submenu">
<li><a href="cliente_pesquisar_emprestimo1.php">Empr&eacute;stimos</a></li>
<li><a href="cliente_pesquisar_reserva1.php">Reservas</a></li>
<li><a class="endlist" href="cliente_pesquisar_filme1.php">Filmes</a></li>
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

<div>
			
			<form name="form1" method="post" action="cliente_pesquisar_reserva.php">
			<fieldset>
				<h1>Pesquisar Reserva</h1><br><br>
				<!--<p>C&oacute;digo <input type="text" name="campocodigo" size="8" maxlength="10"/>
				<i>ou</i>--> 
				<h3>Data de In&iacute;cio</h3>
				<input type="date" required name="dataini" pattern="[0-9]{8}"  maxlength="8" placeholder="AAAA/MM/DD (s� numeros)"  /><br /><br>
				<h3>Data Final</h3>
				<input type="date" required name="datafim" pattern="[0-9]{8}"  maxlength="8" placeholder="AAAA/MM/DD (s� numeros)"  /><br /><br>
				<input type="submit" value="Buscar"></h3>
				
			</fieldset>
			<br>
			<fieldset>
				<h3>Resultado da busca</h3>
				<br>
				
				<div class="CSSTableGenerator" >
				<table id="tabelafundo"><form>
				
					<tr>
						<td>Cliente</td>
						<td>Filme</td>
						<td>Data Requisitada</td>
						<td>Data Feita Reserva</td>
						<td>Situa&ccedil;&atilde;o</td>
					</tr>
					
					<?php
					
					/*if ($campomes == NULL && $campoano != NULL){
					$query = mysql_query ("SELECT * FROM reservacliente WHERE YEAR(DataRequisitada)='$campoano' AND `CodCliente` LIKE '$usuario'");}
					
					else if ($campomes != NULL && $campoano == NULL){
					$query = mysql_query ("SELECT * FROM reservacliente WHERE MONTH(DataRequisitada) = '$campomes' AND `CodCliente` LIKE '$usuario'");}
					
					else {
					$query = mysql_query ("SELECT * FROM reservacliente WHERE `CodCliente` LIKE '$usuario'");}*/
					
					$query = mysql_query ("SELECT * FROM reservacliente WHERE DataRequisitada between '$dataini' AND '$datafim' AND `CodCliente` LIKE '$usuario' AND `Situacao` = 'Andamento';");
					
					while($row = mysql_fetch_array($query)){
										
					?>
					
					<tr>
						<td><a href="cliente_visualizar_reserva.php?reservacliente=<?php echo $row['CodReservaCliente']?>" ><?php echo $row['CodCliente'];?></a></td>
						<td><?php echo $row['CodFilme'];?></td>
						<td><?php echo $row['DataRequisitada'];?></td>
						<td><?php echo $row['DataFeitaReserva'];?></td>
						<td><?php echo $row['Situacao'];?></td>
					</tr><?php } ?>
					</form>
					</table>
					</div>
					</fieldset>
				
				
			</form><br><br>	
			

				
				
</div>

<div id="footer">
</br>
	<div id="altnav">
		<a href="cliente_about.php">Sobre N&oacute;s</a> -
		<a href="cliente_contact.php">Contate-nos</a>
	</div>
Copyright &copy; Locadora Valhalla</br>
</div>

</body>

</html>