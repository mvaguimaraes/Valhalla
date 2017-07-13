<?php

//CADASTRO DE CLIENTE

//$campocodigo = $_POST["campocodigo"];
$camponome = $_GET["camponome"];
//conectando com o localhost - mysql
$conexao = mysql_connect("localhost","root");
if (!$conexao)
	die ("Erro de conexão com localhost, o seguinte erro ocorreu -> ".mysql_error());
//conectando com a tabela do banco de dados
$banco = mysql_select_db("valhalla",$conexao);
if (!$banco)
	die ("Erro de conexão com banco de dados, o seguinte erro ocorreu -> ".mysql_error());

?>

	<h1>Resultado da busca</h1><br><br><br>
				
	<?php
			if(isset($_GET['pagina'])) {
				$pagina = $_GET['pagina'];
			}

			$numero_links = "4"; 
			$total_reg = "9"; 

			// OBS:Ao entrar na pagina que lista os resultados pela primeira vez não passamos parametros, com isso usamos o código abaixo:
			if(!isset($_GET['pagina'])) {
				$pc = "1";
			} else {
				$pc = $pagina;
			}

			// Recebendo dados: Nessa parte pegamos os valores das variaveis e montamos nosso select com base nele

			// intevalo revebe o valor da variavel numero_links
			$intervalo = $numero_links;
			// inicio recebe pc - 1 para montamos o sql
			$inicio = $pc-1;
			$inicio = $inicio*$total_reg;

			//@session_start();
			//$Id = $_SESSION['id'];
			//$data = date("Y-m-d");

			$sql = mysql_query("SELECT `Foto`,`CodFilme`,`Nome`,`Preco` FROM filme WHERE `Nome` LIKE '%$camponome%' ORDER BY `CodFilme`");
			$tr = mysql_num_rows($sql);
			$sql2 = mysql_query("SELECT `Foto`,`CodFilme`,`Nome`,`Preco` FROM filme WHERE `Nome` LIKE '%$camponome%' ORDER BY `DataLancamento` DESC LIMIT $inicio,$total_reg");

			// recebemos o valor do total de paginas
			$tp = ceil($tr/$total_reg);

			// Listando: Nesse bloco listamos os registros
			 
			// listamos os dados de acordo com os parametros da sql2
			if($tp == 0) {
			$pc = 0;
			}
			echo "<table width='1024'><tr id='registro'><td align='center'>";
			if($pc>$tp) {
				echo "REGISTRO INV&Aacute;LIDO <br> CLIQUE EM ANTERIOR";
			} else {
				echo "P&aacute;gina $pc de $tp <br> Total de Registros: $tr";
			}
			echo "</td></tr></table><br><br>"; ?>
				

	
	<table  width="1024px" height="500px">
	
	<?php $cont = 0;?>
	<?php //$query2 = mysql_query ("SELECT `Foto`,`CodFilme`,`Nome`,`Preco` FROM filme WHERE `Nome` LIKE '%$camponome%' ORDER BY `CodFilme`");
	$fotos = array();
	while($row1 = mysql_fetch_array($sql2)){
		
		$fotos[$cont] = $row1;
		$cont++;
	} 
	
	for($i=0; $i<sizeof($fotos); $i+=3){ ?>
		<tr>
		<?php for($j=0; $j<3; $j++){ ?>
			<?php if(isset($fotos[$i+$j])){ ?> 
			<td align="center"><a href="usuario_sem_login_visualizar_filme.php?filme=<?php echo $fotos[$i+$j]['CodFilme']?>"><?php echo "<img src='capas/".$fotos[$i+$j]["Foto"]."'/></a><br>";?>
				<b><?php echo $fotos[$i+$j]['Nome']; ?></b><br>
				<b>Pre&ccedil;o: R$&nbsp;</b><?php echo $fotos[$i+$j]['Preco']; ?><br>&nbsp;<br>
			</td>
			<?php } ?>
		<?php } ?>
		</tr>
	<?php } ?>
	</table>
	
	
	<div id="page">
	<?php $aux = $tp/$intervalo;
		  $aux1 = $pc/$intervalo;
		  $pi = $aux1 * $intervalo;
		  if ($pi == "0") {
				$pi = "1";
		  }
		  $pf = $pi + $intervalo -1;
		  $anterior = $pi-$intervalo;
		  if($pc<=$intervalo) {
				$anterior = 1;
		  }
		  $aux2 = $pi + 1;
		  if($pi>1) {
				$aux = $pi - 1;
				$aux2 = $pi + 1;

				echo "<br>";
				// Começa a listar a paginação
				//echo "<<<a href='". $pag ."pagina=$aux'><b> Anterior </b></a>&nbsp;";
				echo "<font size='1' face='Verdana'>";
				echo "<a href='JavaScript:gerarPaginacao($aux)' class='style1'><b> << Anterior </b></a>&nbsp;";
				echo "</font>";
		  } else {
				echo "<br>";
				echo "<font class='style1'>";
				echo "<< Anterior &nbsp;&nbsp;&nbsp;";
				echo "</font>";
}
			// Monta os links da parte central da paginação
			for ($pi;$pi<$pf;$pi++) {
				  if($pi<=$tp) {
					  echo "<strong><font size='1' face='Verdana'>";
					  if($pc==$pi) {
						 
						 if($pi>=3) {
							$piaux = $pi - 2;
							//echo "<a href='". $pag ."pagina=" . $piaux . "'>" . $piaux . "</a>&nbsp;";
							echo "<a href='JavaScript:gerarPaginacao($piaux)' class='style1'> $piaux </a>&nbsp;";
						 }
						 
						 if($pi!=1) {
							$piaux = $pi - 1;
							//echo "<a href='". $pag ."pagina=" . $piaux . "'>" . $piaux . "</a>&nbsp;";
							echo "<a href='JavaScript:gerarPaginacao($piaux)' class='style1'> $piaux </a>&nbsp;";
						 }
						 echo "<font class='style1'><b>[$pi]</b></font>";
						 
					  } else {
						 //echo "<a href='". $pag ."pagina=" . $pi . "'>" . $pi . "</a>&nbsp;";
						 echo "<a href='JavaScript:gerarPaginacao($pi)' class='style1'> $pi </a>&nbsp;";
						 //echo "<input type='button' onClick='gerarPaginacao($pi)' value='$pi'>";
					  }
					  
					  echo "</font></strong>";
				  }
			}
			// faz verificação pra incluir ou não link na palavra próximo
			   if($pc != $tp && $pc < $tp){
				  echo "<strong><font size='1' face='Verdana'>";
				  //echo "<a href='". $pag ."pagina=$aux2'><b>&nbsp;&nbsp;&nbsp; Próximo</b></a> >>";
				  echo "<a href='JavaScript:gerarPaginacao($aux2)' class='style1'><b> Pr&oacute;ximo >> </b></a>";
				  echo "</font></strong>";
				} else 	{ 
				 echo "<font class='style1'>";
				 echo "&nbsp;&nbsp;&nbsp; Pr&oacute;ximo >>";
				 echo "</font>";
				}
	
		?>
		</div>
		<br><br>
				


		<br>