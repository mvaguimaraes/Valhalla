
<?php
$dataini = $_POST["datainicio"];
$datafim = $_POST["datafinal"];
$valortotal = $_POST["valortotal"];
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


$titulo = "Relatório de Empréstimos"; 
//LOGO QUE SERÁ COLOCADO NO RELATÓRIO

$imagem = "images/header1.jpg"; 
 

//ENDEREÇO ONDE SERÁ GERADO O PDF *OPCIONAL
//$end_final = "relatorios/artigo_php.pdf";

//TIPO DO PDF GERADO 
//F-> SALVA NO ENDEREÇO ESPECIFICADO NA VAR END_FINAL 
// OPCIONAL tipo_pdf = "F";


//set initial y axis position per page
$y_axis_initial = 80;

//print column titles for the actual page

$pdf->SetFillColor(255,255,255);  
$pdf->SetLineWidth(.3);  
//$pdf->SetFillColor(232, 232, 232);
$pdf->SetFont('Arial', '', 7);
$pdf->SetX(8);
$pdf->SetY(1);
$pdf->Cell(30, 6, 'Data de emissão:', 0, 0, 'L', 0);
$pdf->Cell(10, 6, $dataatual, 0, 0, 'L', 0);
$pdf->Image($imagem, 0, 8);
$pdf->SetY(70);
$pdf->SetX(8);
$pdf->Cell(30, 6, 'Relatório de Empréstimos de '.$dataini.' à '.$datafim.'', 0, 0, 'L', 0);
$pdf->SetX(8);

$pdf->SetY(37);
$pdf->SetX(8);
$pdf->SetY($y_axis_initial);
$pdf->SetX(8);
$pdf->SetFont('Arial', 'B', 7);
$pdf->Cell(15, 8, 'Atendente', 1, 0, 'C', 1);
$pdf->Cell(60, 8, 'Filme', 1, 0, 'C', 1);
$pdf->Cell(15, 8, 'Cliente', 1, 0, 'C', 1);
$pdf->Cell(25, 8, 'Data do Empréstimo', 1, 0, 'C', 1);
$pdf->Cell(25, 8, 'Data de Devolução', 1, 0, 'C', 1);
$pdf->Cell(20, 8, 'Situação', 1, 0, 'C', 1);
$pdf->Cell(30, 8, 'Valor(R$)', 1, 0, 'C', 1);
$pdf->SetFont('Arial', '', 7);
//$pdf->Cell(26, 8, 'Valor Prestação (R$)', 1, 0, 'L', 1);
//$pdf->Cell(27, 8, 'Forma de Pagamento', 1, 0, 'L', 1);




//Seleciona o que você deseja imprimir no PDF
$result=("SELECT * FROM emprestimo WHERE DataEmprestimo between '$dataini' AND '$datafim' AND Situacao = 'Finalizado';");
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
        $pdf->Cell(15, 6, 'Atendente', 1, 0, 'C', 1);
        $pdf->Cell(60, 6, 'Filme', 1, 0, 'C', 1);
		$pdf->Cell(15, 6, 'Cliente', 1, 0, 'C', 1);
        $pdf->Cell(25, 6, 'Dta do Empréstimo', 1, 0, 'C', 1);
		$pdf->Cell(25, 6, 'Data de Devolução', 1, 0, 'C', 1);
		$pdf->Cell(20, 6, 'Situação', 1, 0, 'C', 1);
		$pdf->Cell(30, 6, 'Valor(R$)', 1, 0, 'C', 1);
        
        //Go to next row
        $y_axis = $y_axis + $row_height;
        
        //Set $i variable to 0 (first row)
        $i = 0;
    }

    $codatendente = $row['CodAtendente'];
	$codfilme = $row['CodFilme'];
	$codcliente = $row['CodCliente'];
    $dataemp = $row['DataEmprestimo'];
	$datadev = $row['DataDevolucao'];
    $valor = $row['Situacao'];
	$situacao = $row['Multa'];
	

    $pdf->SetY($y_axis);
    $pdf->SetX(8);
    $pdf->Cell(15, 6, $codatendente, 1, 0, 'C', 1);
    $pdf->Cell(60, 6, $codfilme, 1, 0, 'C', 1);
	$pdf->Cell(15, 6, $codcliente, 1, 0, 'C', 5);
    $pdf->Cell(25, 6, $dataemp, 1, 0, 'C', 1);
	$pdf->Cell(25, 6, $datadev, 1, 0, 'C', 5);
	$pdf->Cell(20, 6, $valor, 1, 0, 'C', 5);
	$pdf->Cell(30, 6, $situacao, 1, 0, 'C', 5);


    //Go to next row
    $y_axis = $y_axis + $row_height;
    $i = $i + 1;
	
}

	$pdf->SetFillColor(229,229,229);
	$pdf->SetY($y_axis+10);
	$pdf->SetX(8);
    
	$pdf->SetFont('Arial', 'B', 7);

	$pdf->Cell(160, 6, 'Valor Total: ', 1, 0, 'R', 1);
	$total="$valortotal";
	$pdf->SetFillColor(129,129,129);
	$pdf->Cell(30, 6, $total, 1, 0, 'C', 1);


//Create file
$pdf->Output();
?>
