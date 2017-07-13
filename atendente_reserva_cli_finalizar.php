<?php

$conecta=mysql_connect('localhost', 'root','');
mysql_select_db('valhalla');
?>

<?php

//conectando com o localhost - mysql

$campocod1 = $_POST["campocod1"];

$conexao = mysql_connect("localhost","root");

if (!$conexao)

	die ("Erro de conexão com localhost, o seguinte erro ocorreu -> ".mysql_error());
	
//conectando com a tabela do banco de dados

$banco = mysql_select_db("valhalla",$conexao);


if (!$banco)

	die ("Erro de conexão com banco de dados, o seguinte erro ocorreu -> ".mysql_error());
	
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

<div>
    <!------------------------------------------------------------ CADASTRO    ---------------------------------------------------------->
<?php


$result= mysql_query("SELECT * FROM  `reservacliente` WHERE  `CodReservaCliente` = $campocod1");

while($row= mysql_fetch_array($result))
{?>
	
	<form method="post" action="atendente_reserva_cli_finalizar1.php" >
    <input type="hidden" name="id" value="<?php echo $row['CodReservaCliente']; ?>" />
	<fieldset>
    <h1>Finalizar Reserva Cliente </h1><br><br>
    
				<b>Atendente:</b><br>
			
				<select name="atendente" id="atendente" style="min-width:393px">
				<?php
					include ("conexao.php");
            
					$sql = "SELECT * FROM `atendente` WHERE `Usuario` LIKE '$usuario'";
            
					$resultado = mysql_query($sql) or die('Erro ao selecionar as categorias: ' .mysql_error());
            
					while($linhas = mysql_fetch_array($resultado))
					{
						$selected = ($linhas['Usuario'] == $_POST['Usuario'])?'selected':'';
				?>
				<option value="<?php echo $linhas['Usuario'];  ?>" <?php echo $selected; ?>>
				<?php echo $linhas['Usuario']; ?>
					</option>
				<?php 
				}
				?>
				</select><br><br>

				<b>Cliente:</b><br>
				<?php echo $row['CodCliente']; ?><br /><br>
				<input type="hidden" name="nomecli" value="<?php echo $row['CodCliente']; ?>" />
				
				<b>Filme:</b><br>
				<?php echo $row['CodFilme']; ?><br /><br>
                <input type="hidden" name="filme" value="<?php echo $row['CodFilme']; ?>" />
				
				<b>Data Requisitada:</b><br>
				<?php echo $row['DataRequisitada']; ?> <br /><br>
				<input type="hidden" name="dataemp" value="<?php echo $row['DataRequisitada']; ?>" />
				
			
				
				<!--<b>Multa:</b><br>
				<input type="text" name="multa" id="multa"  maxlength="60" size="60"><br /><br>

				<b>Situa&ccedil;&atilde;o:</b><br>
				<select name="situacao" id="situacao">  
					<option value="Andamento">Em Andamento</option>  
					<option value="Finalizado">Finalizado</option>  
				</select><br><br>-->

				
	
	
    <br/><br/><br/>
    
    <!--<a href="gerente_devolver3.php">-->
	<input type="submit" value="Finalizar" />
	<!--</a>-->
    <br/><br/><br/>
    </fieldset>

<?php
}

?>   
      <p>
      <p>            
  </form>
<p></p>
<p></p>
<br />
<br />
<br />
   <!------------------------------------------------------------ FIM CADASTRO   ---------------------------------------------------------->

  
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