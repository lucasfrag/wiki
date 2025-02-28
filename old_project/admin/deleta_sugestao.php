<?php
	$id=$_GET['id'];

	require("conecta.php"); //Inclui o arquivo para conexão
	conectar_mysql() or die ("Não é possível conectar-se ao servidor.");

	mysql_query("DELETE FROM sugestoes WHERE id='$id'") or die ("Não é possível deletar a sugestão selecionada!");
	
	echo "<script> alert('Sugestão deletada com sucesso!') </script>";
	echo "<script> window.location.href = 'index.php'</script>";
?>