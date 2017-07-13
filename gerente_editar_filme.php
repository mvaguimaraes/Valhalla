<?php

//conectando com o localhost - mysql

//CADASTRO DE FILME
$id = $_POST['id'];
$nome = $_POST["nome"];
$data = $_POST["data"];
$Produtora = $_POST["Produtora"];
$Diretor = $_POST["Diretor"];
$preco = $_POST["preco"];
$elenco = $_POST["elenco"];
$categoria = $_POST["categoria"];
$midia = $_POST["midia"];
$quantidade = $_POST["quantidade"];
$sinopse = $_POST["sinopse"];
$foto = $_FILES["foto"];

$conexao = mysql_connect("localhost","root");

if (!$conexao)

	die ("Erro de conexão com localhost, o seguinte erro ocorreu -> ".mysql_error());
	
//conectando com a tabela do banco de dados

$banco = mysql_select_db("valhalla",$conexao);


if (!$banco)

	die ("Erro de conexão com banco de dados, o seguinte erro ocorreu -> ".mysql_error());
	

	//*********************UPLOAD*********************	

	// Se a foto estiver sido selecionada
	if (!empty($foto["name"])) {
 
		// Largura máxima em pixels
		$largura = 165;
		// Altura máxima em pixels
		$altura = 229;
		// Tamanho máximo do arquivo em bytes
		$tamanho = 1000000;
		// Pega as dimensões da imagem
		$dimensoes = getimagesize($foto["tmp_name"]);
 
    	// Verifica se o arquivo é uma imagem
    	if( !preg_match( '/^image\/(jpeg|gif|pjpeg|jpg|png)$/', $foto['type']) ){
     	   echo "<script>alert('Isso nao e uma imagem!');top.location.href='gerente_index.php';</script>";
   	 	} 
 		
		// Verifica se a largura da imagem é maior que a largura permitida
		else if($dimensoes[0] > $largura) {
			echo "<script>alert('A largura da imagem não deve ultrapassar ".$largura." pixels!');top.location.href='gerente_index.php';</script>";
		}
 
		// Verifica se a altura da imagem é maior que a altura permitida
		else if($dimensoes[1] > $altura) {
			echo "<script>alert('Altura da imagem não deve ultrapassar ".$altura." pixels!');top.location.href='gerente_index.php';</script>";
		}
 
		// Verifica se o tamanho da imagem é maior que o tamanho permitido
		else if($foto["size"] > $tamanho) {
   		 	echo "<script>alert('A imagem deve ter no máximo ".$tamanho." bytes!');top.location.href='gerente_index.php';</script>";
		}
 

		else{	
			
			// Se não houver nenhum erro
 
			// Pega extensão da imagem
			
			preg_match("/.(gif|bmp|png|jpg|jpeg){1}$/i", $foto["name"], $ext);
 
        	// Gera um nome único para a imagem
        	$nome_imagem = md5(uniqid(time())) . "." . $ext[1];
 
        	// Caminho de onde ficará a imagem
        	$caminho_imagem = "capas/" . $nome_imagem;
 
			// Faz o upload da imagem para seu respectivo caminho
			move_uploaded_file($foto["tmp_name"], $caminho_imagem);
 	
//*********************UPLOAD*********************	
	

    mysql_query("UPDATE  `valhalla`.`filme` SET `Nome` ='$nome' ,`DataLancamento`='$data' ,`Produtora`='$Produtora' ,`Diretor`='$Diretor' ,`Preco`='$preco' ,`ElencoPrincipal`='$elenco' ,`Categoria`='$categoria' ,`Midia`='$midia' ,`Quantidade`='$quantidade' ,`Sinopse`='$sinopse',`Foto`='$nome_imagem' WHERE `filme`.`CodFilme` ='$id';");
    echo "<script>alert('Editado com sucesso!');top.location.href='gerente_index.php';</script>";
	
	}
}

?>	   