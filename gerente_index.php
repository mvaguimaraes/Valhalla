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

<div id="header">


</div>

<div id="content">
<div class="mainmen">
				<br>
				
	
</div>
</div>


    	<div id="filmroll">
		<br><br><br>
    		
			<div id='left'>
		<!--<a href='' title='Balletto'><img src='./imgs/pre1.jpg' /></a>
		<img src='./imgs/pre2.jpg' title='Pesca' />
		<a href='' title='Tigre'><img src='./imgs/pre3.jpg' /></a>
		<img src='./imgs/pre4.jpg' title='Lago' />
		<a href='' title='Abstract'><img src='./imgs/pre5.jpg' /></a>-->
								<?php $query = mysql_query ("SELECT `Foto`,`CodFilme` FROM filme ORDER BY `CodFilme` DESC LIMIT 10"); 
								while($row = mysql_fetch_array($query)){?>
								<!--Select * from empresa order by cd desc limit 10?>-->
								<a href="gerente_visualizar_filme.php?filme=<?php echo $row['CodFilme']?>"><?php echo "<img src='capas/".$row["Foto"]."'/></a>";?>
                                <!--<img src="images/hp.png" alt="product 1" /></a>
                                <img src="images/pi.png" alt="product 2" /></a>
                                <img src="images/franken.png" alt="product 3" /></a>
                                <img src="images/ralph.png" alt="product 4" /></a>
                                <img src="images/miser.png" alt="product 5" /></a>
                                <img src="images/ff7.png" alt="product 6" /></a>
                                <img src="images/chihiro.png" alt="product 7" /></a>
								<img src="images/miser.png" alt="product 8" /></a>
								<img src="images/franken.png" alt="product 9" /></a>
                                <img src="images/ralph.png" alt="product 10" /></a>-->
								<?php } ?>
	</div>
    </div><br><br><br>
	
	<h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&Uacute;ltimos Lan&ccedil;amentos</h1><br><br>
	
	<table  width="1024px" height="500px">
	
	
	<?php $cont = 0;?>
	<?php $query2 = mysql_query ("SELECT `Foto`,`CodFilme`,Nome,Preco FROM filme ORDER BY `DataLancamento` DESC LIMIT 9");
	$fotos = array();
	while($row1 = mysql_fetch_array($query2)){
		
		$fotos[$cont] = $row1;
		$cont++;
	} 
	
	for($i=0; $i<sizeof($fotos); $i+=3){ ?>
		<tr>
		<?php for($j=0; $j<3; $j++){ ?>
			<?php if(isset($fotos[$i+$j])){ ?> 
			<td align="center"><a href="gerente_visualizar_filme.php?filme=<?php echo $fotos[$i+$j]['CodFilme']?>"><?php echo "<img src='capas/".$fotos[$i+$j]["Foto"]."'/></a><br>";?>
				<b><?php echo $fotos[$i+$j]['Nome']; ?></b><br>
				<b>Pre&ccedil;o: R$&nbsp;</b><?php echo $fotos[$i+$j]['Preco']; ?><br>&nbsp;<br>
			</td>
			<?php } ?>
		<?php } ?>
		</tr>
	<?php } ?>
	</table><br><br>

	
<div id="footer">
</br>
	<div id="altnav">
		<a href="gerente_about.php">Sobre N&oacute;s</a> -
		<a href="gerente_contact.php">Contate-nos</a>
	</div>
Copyright &copy; Locadora Valhalla</br>
</div>

</body>
</html>