<?php
	$titulo=$_POST['titulo'];
	$linguagem=$_POST['linguagem'];
	$categoria=$_POST['categoria'];
	$formato=$_POST['formato'];
	$conteudo=$_POST['conteudo'];

	if ($titulo=="" or $categoria=="") {
		echo "<script> alert('Preencha todos os campos corretamente!')</script>";
	}

	else {
		require("conecta.php"); //Inclui o arquivo para conexão
		conectar_mysql() or die ("Não é possível conectar-se ao servidor.");
		
		// Converter caracteres especiais para UTF-8
		mysql_query("SET NAMES 'utf8'");
    	mysql_query('SET character_set_connection=utf8');
    	mysql_query('SET character_set_client=utf8');
    	mysql_query('SET character_set_results=utf8');
		
		mysql_query("INSERT INTO postagens (titulo, linguagem, categoria, formato, conteudo) VALUES ('$titulo', '$linguagem', '$categoria', '$formato', '$conteudo')");

		echo "<script> alert('Postagem cadastrada com sucesso!') </script>";
	}
		echo "<script> window.location.href = 'index.php'</script>";
?>