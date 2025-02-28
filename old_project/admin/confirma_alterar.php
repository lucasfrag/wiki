<?php 
	$id=$_GET['id'];
	$titulo=$_GET['titulo'];
	$linguagem=$_GET['linguagem'];
	$categoria=$_GET['categoria'];
	$formato=$_GET['formato'];
	$conteudo=$_GET['conteudo'];

	require("conecta.php"); //Inclui o arquivo para conexão
	conectar_mysql() or die ("Não é possível conectar-se ao servidor.");

	mysql_query("UPDATE postagens SET titulo='$titulo', linguagem='$linguagem', categoria='$categoria', formato='$formato', conteudo='$conteudo' WHERE id='$id'") or die ("Não é possível alterar dados da postagem!");

	echo "<script> alert('Sugestão alterada com sucesso!') </script>";
	echo "<script> window.location.href = 'index.php'</script>";
?>