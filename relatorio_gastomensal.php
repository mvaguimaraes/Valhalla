
<?php
include("conexao.php");
include("restrito.php");


					$query = mysql_query ("SELECT * FROM  `usuario` WHERE  `Login` LIKE  '$login_usuario'");
					$sql = mysql_query ("SELECT * FROM  `usuario` WHERE  `Login` LIKE  '$login_usuario'");
					
?>
 <?php while($row = mysql_fetch_array($query))
					{
						$id =$row['codUsuario'];
					}
?>
<?php
$data= $_GET["data"];
$somatotal= $_GET["soma"];
$mes= $_GET["mes"];
$ano= $_GET["ano"];
$data_relatorio= "$mes/$ano";
$dataatual= date("d-m-Y");


define('FPDF_FONTPATH', 'fpdf/font/');
require('fpdf/fpdf.php');

//Conectando banco de dados
include("conexao.php");

//Criando novo PDF
$pdf=new FPDF();

//Abrindo PDF
$pdf->Open();


//Disable automatic page break
$pdf->SetAutoPageBreak(false);

//Adicionar Primeira Página
$pdf->AddPage();

// Diretorio de onde a pasta está
$end_fpdf = "fpdf/";

//NUMERO DE RESULTADOS POR PÁGINA 
//$por_pagina = 13;


$titulo = "Gasto mensal"; 
//LOGO QUE SERÁ COLOCADO NO RELATÓRIO

$imagem = "images/Sistema_ADM.png"; 
 

//ENDEREÇO ONDE SERÁ GERADO O PDF *OPCIONAL
//$end_final = "relatorios/artigo_php.pdf";

//TIPO DO PDF GERADO 
//F-> SALVA NO ENDEREÇO ESPECIFICADO NA VAR END_FINAL 
// OPCIONAL tipo_pdf = "F";


//set initial y axis position per page
$y_axis_initial = 65;

//print column titles for the actual page

$pdf->SetFillColor(255,255,255);  
$pdf->SetLineWidth(.3);  
//$pdf->SetFillColor(232, 232, 232);
$pdf->SetFont('Arial', '', 7);
$pdf->SetX(8);
$pdf->SetY(0);
$pdf->Image($imagem, 0, 8);
$pdf->SetX(8);
$pdf->SetY(32);
$pdf->SetX(8);
$pdf->Cell(30, 6, 'Data de emissão:', 0, 0, 'L', 0);
$pdf->Cell(10, 6, $dataatual, 0, 0, 'L', 0);
$pdf->SetY(37);
$pdf->SetX(8);
$pdf->Cell(30, 6, 'Nome:', 0, 0, 'L', 0);

$banco=("select * from Usuario where codUsuario=$id");


$banco_resultado=mysql_query($banco);
$banco_linhas=mysql_num_rows($banco_resultado);



while($rows = mysql_fetch_array($banco_resultado))
{
	$nome=$rows['Nome'];
	$sobrenome=$rows['Sobrenome'];
	$datanasc=$rows['DataNasc'];
	$email=$rows['Email'];
}

$nomecompleto="$nome $sobrenome";
$pdf->Cell(60, 6, $nomecompleto, 0, 0, 'L', 0);
$pdf->SetY(42);
$pdf->SetX(8);
$pdf->Cell(30, 6, 'Email:', 0, 0, 'L', 0);
$pdf->Cell(60, 6, $email, 0, 0, 'L', 0);
$pdf->SetY(47);
$pdf->SetX(8);
$pdf->Cell(30, 6, 'Relatório:', 0, 0, 'L', 0);
$pdf->Cell(60, 6, 'Despesa Mensal', 0, 0, 'L', 0);
$pdf->SetY(52);
$pdf->SetX(8);
$pdf->Cell(30, 6, 'Despesa (Mês/ano) :', 0, 0, 'L', 0);
$pdf->Cell(60, 6, $data_relatorio, 0, 0, 'L', 0);
$pdf->SetY($y_axis_initial);
$pdf->SetX(8);
$pdf->Cell(10, 8, 'Cod', 1, 0, 'L', 1);
$pdf->Cell(15, 8, 'Categoria', 1, 0, 'L', 1);
$pdf->Cell(55, 8, 'Nome', 1, 0, 'L', 1);
$pdf->Cell(15, 8, 'Data', 1, 0, 'L', 1);
$pdf->Cell(17, 8, 'Vencimento', 1, 0, 'L', 1);
$pdf->Cell(15, 8, 'Prestação', 1, 0, 'L', 1);
$pdf->Cell(15, 8, 'Valor (R$)', 1, 0, 'L', 1);
$pdf->Cell(26, 8, 'Valor Prestação (R$)', 1, 0, 'L', 1);
$pdf->Cell(27, 8, 'Forma de Pagamento', 1, 0, 'L', 1);




//Seleciona o que você deseja imprimir no PDF
$result=("select * from Conta where MONTH(DataConta)= $data and codUsuario=$id");
$resultado=mysql_query($result);

//initialize counter
$i = 0;

//Set maximum rows per page
$max = 25;

//Set Row Height
$row_height = 6;
$y_axis=$y_axis_initial;
$y_axis = $y_axis + $row_height;

while($row = mysql_fetch_array($resultado))
{
    //If the current row is the last one, create new page and print column title
    if ($i == $max)
    {
        $pdf->AddPage();

        //print column titles for the current page
		$pdf->SetY($y_axis_initial);
        $pdf->SetX(8);
        $pdf->Cell(10, 6, 'idConta', 1, 0, 'L', 1);
        $pdf->Cell(15, 6, 'DataConta', 1, 0, 'L', 1);
		$pdf->Cell(15, 6, 'Vencimento', 1, 0, 'L', 1);
        $pdf->Cell(30, 6, 'Valor', 1, 0, 'R', 1);
		$pdf->Cell(30, 6, 'NumeroParcelas', 1, 0, 'R', 1);
        
        //Go to next row
        $y_axis = $y_axis + $row_height;
        
        //Set $i variable to 0 (first row)
        $i = 0;
    }

    $code = $row['idConta'];
	$categoria = $row['idCategorias'];
						$banc = mysql_query ("SELECT * FROM categoria where idCategorias = $categoria");
						
						while($rows = mysql_fetch_array($banc))
						{
						
						   $nomecategoria=$rows['Nome'];
						
						}
	$tipoconta = $row['idTipoConta'];
	$banctc = mysql_query ("SELECT * FROM tipoconta where idTipoConta = $tipoconta");
						
						while($rowtc = mysql_fetch_array($banctc))
						{
						
						    $nometipoconta=$rowtc['Nome'];
						
						}
    $date = $row['DataConta'];
	$vencimento = $row['DataVencimento'];
    $valor = $row['Valor'];
	$valorprestacao= $row["ValorParcela"];
	$prestacao = $row['NumeroParcelas'];
	$pagamento= $row['idFormaPagamento'];
	$bancf = mysql_query ("SELECT * FROM formaspagamento where idFormaPagamento = $pagamento");
						
						while($rowsf = mysql_fetch_array($bancf))
						{
						
						   $nomepagamento=$rowsf['Nome'];
						
						}
	if($prestacao==0)
	{
		$prestacao="Á vista";
		$valorprestacao=" - ";
	}
	else
	{
		$prestacao=" $prestacao ";
		
	}
	

    $pdf->SetY($y_axis);
    $pdf->SetX(8);
    $pdf->Cell(10, 6, $code, 1, 0, 'L', 1);
    $pdf->Cell(15, 6, $nomecategoria, 1, 0, 'C', 1);
	$pdf->Cell(55, 6, $nometipoconta, 1, 0, 'C', 5);
    $pdf->Cell(15, 6, $date, 1, 0, 'L', 1);
	$pdf->Cell(17, 6, $vencimento, 1, 0, 'C', 5);
	$pdf->Cell(15, 6, $prestacao, 1, 0, 'C', 5);
	$pdf->Cell(15, 6, $valor, 1, 0, 'C', 5);
	$pdf->Cell(26, 6, $valorprestacao, 1, 0, 'C', 5);
	$pdf->Cell(27, 6, $nomepagamento, 1, 0, 'C', 5);

    //Go to next row
    $y_axis = $y_axis + $row_height;
    $i = $i + 1;
	
}

$pdf->SetFillColor(229,229,229); 
$pdf->SetY($y_axis+5);
$pdf->SetX(8);
$pdf->Cell(168, 6, 'Valor Despesa:', 1, 0, 'L', 1);
$valortotal="R$ $somatotal";
$pdf->Cell(27, 6, $valortotal, 1, 0, 'L', 1);



//Create file
$pdf->Output();
?>
