<?php
	$cod = 2;
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="Shortcut Icon" type="image/png" href="css/icons/icon.png">
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

<!--Botão de retorno-->
<div style="width: 250px; height: 50px; position: absolute; top: 250px; left: 10px">
	<a href="index.php" style="color: black">
		<img src="css/icons/back.png" style="width:30px; height: 30px; float: left;">
		<hr color="white" width="10%" align="left" size="5">
		<p style="font-size: 18px;"> &nbspPágina Anterior</p>
	</a>
</div>


<!--Início do conteúdo-->
<div id="container2">
	<?php 
		require("conecta.php"); //Inclui o arquivo para conexão
		conectar_mysql() or die ("Não é possível conectar-se ao servidor.");

		// Converter caracteres especiais para UTF-8
		mysql_query("SET NAMES 'utf8'");
    	mysql_query('SET character_set_connection=utf8');
    	mysql_query('SET character_set_client=utf8');
    	mysql_query('SET character_set_results=utf8');


		//Recebe os dados do banco de dados
		$resultado = mysql_query("SELECT * FROM linguagens WHERE idL='$cod'");

		while ($linha=mysql_fetch_array($resultado)) {
			$titulo=$linha["nomeL"];
		}

		print("<h1>$titulo</h1><br>");

	?>


<!-- <<<<<<<<<<<<<<< Tutoriais >>>>>>>>>>>>>>>>>>>>>-->
	<h2>Tutorial</h2>
	<br>
	<!--Busca informações no banco de dados-->
	<?php
		//Recebe os dados do banco de dados
		$resultado = mysql_query("SELECT * FROM postagens WHERE linguagem='$cod' AND categoria='1' ORDER BY titulo;");

		// Converter caracteres especiais para UTF-8
		mysql_query("SET NAMES 'utf8'");
    	mysql_query('SET character_set_connection=utf8');
    	mysql_query('SET character_set_client=utf8');
    	mysql_query('SET character_set_results=utf8');


		//Exibe os dados recebidos
		while ($linha=mysql_fetch_array($resultado)) {
			$titulo=$linha["titulo"];
			$id=$linha["id"];
			$formato=$linha["formato"];
			
			print("<a href='show.php?cod=$id' style='text-decoration: none; color:black;'><img src=$formato style='height: 28px'> $titulo</a><br><br>");
		}
	?><br>

<!-- <<<<<<<<<<<<<<< Downloads >>>>>>>>>>>>>>>>>>>>>-->
	<h2>Downloads</h2>
	<br>

	<!--Busca informações no banco de dados-->
	<?php
		//Recebe os dados do banco de dados
		$resultado = mysql_query("SELECT * FROM postagens WHERE linguagem='$cod' AND categoria='2' ORDER BY titulo;");


		//Exibe os dados recebidos
		while ($linha=mysql_fetch_array($resultado)) {
			$titulo=$linha["titulo"];
			$id=$linha["id"];
			$formato=$linha["formato"];

			print("<a href='show.php?cod=$id' style='text-decoration: none; color:black;'><img src=$formato style='height: 28px'> $titulo</a><br><br>");
		}
	?><br>

</div>

<div id="container3">
	<hr color="white" width="10%" align="left" size="35">
	<br>

<!-- <<<<<<<<<<<<<<< Artigos, Livros e eBooks >>>>>>>>>>>>>>>>>>>>>-->
	<br><h2>Artigos, Livros e eBooks</h2>
	<br>

	<?php
		//Recebe os dados do banco de dados
		$resultado = mysql_query("SELECT * FROM postagens WHERE linguagem='$cod' AND categoria='3' ORDER BY titulo;");

		// Converter caracteres especiais para UTF-8
		mysql_query("SET NAMES 'utf8'");
    	mysql_query('SET character_set_connection=utf8');
    	mysql_query('SET character_set_client=utf8');
    	mysql_query('SET character_set_results=utf8');


		//Exibe os dados recebidos
		while ($linha=mysql_fetch_array($resultado)) {
			$titulo=$linha["titulo"];
			$id=$linha["id"];
			$formato=$linha["formato"];
			$conteudo=$linha["conteudo"];
			
			print("<a href='$conteudo' style='text-decoration: none; color:black;'><img src=$formato style='height: 28px'> $titulo</a><br><br>");
		}
	?><br>
	
<!-- <<<<<<<<<<<<<<< Vídeos >>>>>>>>>>>>>>>>>>>>>-->
	<h2>Vídeos</h2>
	<br>

	<?php
		//Recebe os dados do banco de dados
		$resultado = mysql_query("SELECT * FROM postagens WHERE linguagem='$cod' AND categoria='4' ORDER BY titulo;");

		// Converter caracteres especiais para UTF-8
		mysql_query("SET NAMES 'utf8'");
    	mysql_query('SET character_set_connection=utf8');
    	mysql_query('SET character_set_client=utf8');
    	mysql_query('SET character_set_results=utf8');


		//Exibe os dados recebidos
		while ($linha=mysql_fetch_array($resultado)) {
			$titulo=$linha["titulo"];
			$id=$linha["id"];
			$formato=$linha["formato"];
			$conteudo=$linha["conteudo"];
			
			print("<a href='$conteudo' target='_blank' style='text-decoration: none; color:black;'><img src=$formato style='height: 28px'> $titulo</a><br><br>");
		}
	?><br>

</div>
<!--Fim do conteúdo-->


<!--Sugestões-->
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