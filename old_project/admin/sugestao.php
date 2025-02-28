<?php
	$titulo=$_POST['titulo'];
	$categoria=$_POST['categoria'];
	$descricao=$_POST['descricao'];

	if ($titulo=="" or $categoria=="" or $descricao=="") {
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
		
		mysql_query("INSERT INTO sugestoes (titulo, descricao, categoria) VALUES ('$titulo', '$descricao', '$categoria');") or die ("Não é possível inserir dados no banco!");

		echo "<script> alert('Sugestão enviada com sucesso!') </script>";
	}
		echo "<script> window.location.href = 'index.php'</script>";
?>