<?php
	$datainicio = $_POST['datainicio'];
	$datafinal = $_POST["datafinal"];
	
	$conexao = mysql_connect("localhost","root");

   //Incluir a classe excelwriter
   include("excelwriter.inc.php");

   //Você pode colocar aqui o nome do arquivo que você deseja salvar.
    $excel=new ExcelWriter("Relatorio_Locadora_Valhalla.xls");

    if($excel==false){
        echo $excel->error;
   }

   //Escreve o nome dos campos de uma tabela
   $myArr=array('Atendente','Filme','Cliente','Data do Empr&eacute;stimo','Data de Devolu&ccedil;&atilde;o','Valor','Situa&ccedil;&atilde;o');
   $excel->writeLine($myArr);

   //Seleciona os campos de uma tabela
	$conn = mysql_connect('localhost', 'root', '') or die ('Não foi possivel conectar ao banco de dados! Erro: ' . mysql_error());
	if($conn)
	{
	mysql_select_db("valhalla", $conn);
	}
   //$consulta = "select * from emprestimo order by DataEmprestimo";
   $consulta = "SELECT * FROM emprestimo WHERE DataEmprestimo between '$datainicio' AND '$datafinal' AND Situacao = 'Finalizado';";
   $resultado = mysql_query($consulta);
   if($resultado==true){
      while($linha = mysql_fetch_array($resultado)){
         $myArr=array($linha['CodAtendente'],$linha['CodFilme'],$linha['CodCliente'],$linha['DataEmprestimo'],$linha['DataDevolucao'],$linha['Multa'],$linha['Situacao']);
         $excel->writeLine($myArr);
      }
   }


    $excel->close();

    //echo "<script>alert('Relatorio gerado com sucesso!');top.location.href='gerente_index.php';</script>";
	// Passando link no echo: echo "Sorry there's a problem sending your message. Please try <a href=Relatorio_Locadora_Valhalla.xls>again</a>";
	echo "O arquivo foi salvo com sucesso. <a href=\"Relatorio_Locadora_Valhalla.xls\">Clique aqui para baixar</a>";

?>
