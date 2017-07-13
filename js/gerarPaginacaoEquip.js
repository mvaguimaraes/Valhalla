	function gerarPaginacaoEquip(pag) {


	if(window.XMLHttpRequest) {
		var xmlhttp = new XMLHttpRequest();
	} else 	{
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange = function(){
		if(xmlhttp.readyState==4) {
			document.getElementById("tabela").innerHTML=xmlhttp.responseText;
		}else{
			document.getElementById("tabela").innerHTML= "<img src='../images/Carreg.gif'>";
		}
	}
	var url="";
	
	var url="../gerente_pesquisar_filme.php";
	url=url+"&camponome="+nome;
	url=url+"&sid="+Math.random();
	xmlhttp.open("GET", url, true);
	xmlhttp.send(null);
	}
