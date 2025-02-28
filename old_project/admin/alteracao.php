<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="Shortcut Icon" type="image/png" href="../css/icons/icon.png">
</head>
<body>

<!--Header Begins-->
	<!--Área de fundo com Wallpaper-->
	<div id="bg">
		<img src="css/images/screamer.png" height="200px" style="position: absolute; right: 0px; top: -10px;">
		<img src="css/images/login.png" height="200px" style="position: absolute; right: 8px; top: 0px;">
		<img src="css/images/crazy.png" height="280px" style="position: absolute; left: -120px; top: -50px;">
	</div>

	<!--Barra escura-->
	<div id="bar">
		<hr color="black" width="10%" align="left" size="12">
		<div style="position: absolute; left: 5%;">Bem-vindo, Mestre!</div>
	</div>

	<!--Imagem central-->
	<div id="header"></div>

	<!--Pela divs anteriores serem Position Absolute, as quebras de linhas abaixo ajustarão a exibição do conteúdo-->
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<!--Header Ends-->

<!--Início do conteúdo-->

<center>

<?php
	$id=$_GET['id'];

	require("conecta.php"); //Inclui o arquivo para conexão
	conectar_mysql() or die ("Não é possível conectar-se ao servidor.");
	// Converter caracteres especiais para UTF-8
		mysql_query("SET NAMES 'utf8'");
    	mysql_query('SET character_set_connection=utf8');
    	mysql_query('SET character_set_client=utf8');
    	mysql_query('SET character_set_results=utf8');

	$result=mysql_query("SELECT * FROM postagens WHERE id='$id'") or die ("Não é possível retornar dados do servidor!");
	$linha=mysql_fetch_array($result);
	$id=$linha["id"];
	$titulo=$linha["titulo"];
	$categoria=$linha["categoria"];
	$linguagem=$linha["linguagem"];
	$formato=$linha["formato"];
	$conteudo=$linha["conteudo"];
	print("<br><h3>Alterando os Dados da Postagem de ID $id</h3>");
?>
<br>
<form action="confirma_alterar.php" method="get">
	<input type="hidden" name="id" value="<?php print($id)?>">
	
	<input required name="titulo" placeholder="Título (Ex.: Tutorial da Wiki)" value="<?php print($titulo)?>" style="width: 300px; height: 15px; padding: 6px 12px; font-size: 14px; line-height: 1.42857143; color: #555; background-color: #fff; background-image: none; border: 1px solid #ccc; border-radius: 4px;">

	<input required name="linguagem" placeholder="Linguagem (Ex.: Java)" value="<?php print($linguagem)?>" style="width:300px; height: 15px; padding: 6px 12px; font-size: 14px; line-height: 1.42857143; color: #555; background-color: #fff; background-image: none; border: 1px solid #ccc; border-radius: 4px;"><br><br>
		
	<input required name="categoria" placeholder="Categoria (Ex.: Tutorial, Downloads, Extras, Vídeos)" value="<?php print($categoria)?>" style="width: 300px; height: 15px; padding: 6px 12px; font-size: 14px; line-height: 1.42857143; color: #555; background-color: #fff; background-image: none; border: 1px solid #ccc; border-radius: 4px;"> 

	<input required name="formato" placeholder="Formato (Ex.: ../css/filetype/pdf.svg)" value="<?php print($formato)?>" style="width:300px; height: 15px; padding: 6px 12px; font-size: 14px; line-height: 1.42857143; color: #555; background-color: #fff; background-image: none; border: 1px solid #ccc; border-radius: 4px;"><br><br>

	<input required name="conteudo" placeholder="Conteúdo" value="<?php print($conteudo)?>" style="width: 630px; height: auto; padding: 6px 12px; font-size: 14px; line-height: 1.42857143; color: #555; background-color: #fff; background-image: none; border: 1px solid #ccc; border-radius: 4px;"><br><br>

	<button style="color: #333; background-color: #ebebeb; border-color: #adadad; display: inline-block; padding: 6px 12px; margin-bottom: 0; font-size: 14px; font-weight: normal;user-select: none; background-image: none; border: 1px solid transparent; border-radius: 4px;">Alterar Dados</button><br><br>
</form>

<a href="index.php"><button style="color: #333; background-color: #ebebeb; border-color: #adadad; display: inline-block; padding: 6px 12px; margin-bottom: 0; font-size: 14px; font-weight: normal;user-select: none; background-image: none; border: 1px solid transparent; border-radius: 4px;"> Cancelar e voltar</button></a>
<br><br><br>
</center>
<!--Fim do conteúdo-->

<!--Sugestões Begins-->
	<center>
	<form action="sugestao.php" method="POST">
		<h2>Envie Sugestões</h2>
		<br>

		<!--Titulo-->
		<input required type="" name="titulo" placeholder="Título" style="width: 300px; height: 15px; padding: 6px 12px; font-size: 14px; line-height: 1.42857143; color: #555; background-color: #fff; background-image: none; border: 1px solid #ccc; border-radius: 4px;">
		
		<!--Categoria-->
		<input required type="" name="categoria" placeholder="Categoria" style="width:300px; height: 15px; padding: 6px 12px; font-size: 14px; line-height: 1.42857143; color: #555; background-color: #fff; background-image: none; border: 1px solid #ccc; border-radius: 4px;"><br><br>
		
		<!--Descrição-->
		<input required type="" name="descricao" placeholder="Descrição" style="width: 630px; height: 74px; padding: 6px 12px; font-size: 14px; line-height: 1.42857143; color: #555; background-color: #fff; background-image: none; border: 1px solid #ccc; border-radius: 4px;"><br><br>
		
		<!--Enviar-->
		<button style="color: #333; background-color: #ebebeb; border-color: #adadad; display: inline-block; padding: 6px 12px; margin-bottom: 0; font-size: 14px; font-weight: normal;user-select: none; background-image: none; border: 1px solid transparent; border-radius: 4px;">Enviar Sugestão!</button>
	</form>
	</center>
	<br><br><br>
<!-- Sugestões Ends -->


</body>
</html>